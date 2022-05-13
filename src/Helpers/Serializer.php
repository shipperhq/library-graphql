<?php
/**
 * Shipper HQ
 *
 * @category ShipperHQ
 * @package ShipperHQ_GraphQL
 * @copyright Copyright (c) 2019 Zowta LTD and Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */

namespace ShipperHQ\GraphQL\Helpers;

use ShipperHQ\GraphQL\Exception\SerializerException;
use ShipperHQ\GraphQL\Helpers\Serializer\ExtJsonMapper;

class Serializer
{
    /** @var array */
    private static $cache;

    /** @var ExtJsonMapper */
    private static $jsonMapper;

    /**
     * @param $fromObject
     * @param int $jsonOptions
     * @return false|string
     * @throws \ReflectionException
     */
    public static function serialize($fromObject, int $jsonOptions) {
        $mappedObject = self::getPropertyTree($fromObject);

        return !empty($mappedObject)
            ? json_encode($mappedObject, $jsonOptions)
            : "{}";
    }

    /**
     * @param string $jsonData
     * @param string $typeName
     * @return object
     * @throws \JsonMapper_Exception
     */
    public static function deserialize(string $jsonData, string $typeName) {
        if (!static::$jsonMapper) {
            static::$jsonMapper = new ExtJsonMapper();
            static::$jsonMapper->bStrictNullTypes = false;
            static::$jsonMapper->undefinedPropertyHandler = function ($object, string $propMappedName, $jsonValue) {
                $properties = static::getReversePropertiesMap(get_class($object));
                $propOrigName = $properties[$propMappedName] ?? false;
                if ($propOrigName) {
                    $method = 'set' . ucwords($propOrigName);
                    if (method_exists($object, $method)) {
                        $rc = static::getReflectionClass(get_class($object));
                        $propDetails = static::$jsonMapper->getPropertyDetails($rc, $propOrigName);
                        if ($propDetails) {
                            $object->{$method}(static::deserialize($jsonValue, $propDetails[2]));
                        } else {
                            throw new SerializerException("Could not determine type of property $propOrigName");
                        }
                    } else {
                        throw new SerializerException("Could not deserialize property $propMappedName");
                    }
                } else {
                    throw new SerializerException("Property $propMappedName is not allowed");
                }
            };
        }

        if (static::$jsonMapper->doesTypeNeedMapping($typeName)) {
            $rc = static::getReflectionClass($typeName);
            return static::$jsonMapper->map(json_decode($jsonData), $rc->newInstanceWithoutConstructor());
        } else {
            settype($jsonData, $typeName);
            return $jsonData;
        }
    }

    /**
     * @param string $className
     * @return \ReflectionClass
     * @throws \ReflectionException
     */
    private static function getReflectionClass($className) {
        return static::$cache[$className]['reflectionClass'] ?? (
            static::$cache[$className]['reflectionClass'] = new \ReflectionClass($className)
        );
    }

    /**
     * @param $className
     * @return \ReflectionProperty[]
     * @throws \ReflectionException
     */
    private static function getPropertiesForClass($className) {
        return static::$cache[$className]['properties'] ?? (
            static::$cache[$className]['properties'] = static::getReflectionClass($className)->getProperties()
        );
    }

    /**
     * @param \ReflectionProperty $property
     * @return bool|string
     */
    private static function getDocBlockForProperty(\ReflectionProperty $property) {
        return $property->getDocComment();
    }

    /**
     * @param \ReflectionProperty $property
     * @return bool|string
     */
    private static function getJsonSerializeAsForProperty(\ReflectionProperty $property) {
        $matches = [];
        $doc = static::getDocBlockForProperty($property);

        if (is_string($doc)) {
            preg_match("/^.*(@jsonSerializeAs)\s*([\w-]*)$/m", $doc, $matches);
        }

        return $matches[2] ?? false;
    }

    /**
     * @param \ReflectionProperty $property
     * @return string
     */
    private static function getJsonSerializeNameForProperty(\ReflectionProperty $property) {
        return static::getJsonSerializeAsForProperty($property) ?: $property->getName();
    }

    /**
     * @param string $className
     * @return array
     * @throws \ReflectionException
     */
    private static function getPropertiesMap(string $className)
    {
        if (isset(static::$cache[$className]['propMap'])) {
            return static::$cache[$className]['propMap'];
        }

        $properties = static::getPropertiesForClass($className);

        foreach ($properties as $prop) {
            $propOrigName = $prop->getName();
            $propMappedName = static::getJsonSerializeNameForProperty($prop);
            self::addToPropMap($className, $propMappedName, $propOrigName);
        }

        return static::$cache[$className]['propMap'] ?? [];
    }

    /**
     * @param string $className
     * @return array
     * @throws \ReflectionException
     */
    private static function getReversePropertiesMap(string $className)
    {
        if (isset(static::$cache[$className]['revPropMap'])) {
            return static::$cache[$className]['revPropMap'];
        }

        $properties = static::getPropertiesForClass($className);

        foreach ($properties as $prop) {
            $propOrigName = $prop->getName();
            $propMappedName = static::getJsonSerializeNameForProperty($prop);
            self::addToPropMap($className, $propMappedName, $propOrigName);
        }

        return static::$cache[$className]['revPropMap'] ?? [];
    }

    /**
     * @param string $className
     * @param $propMappedName
     * @param $propOrigName
     */
    private static function addToPropMap(string $className, $propMappedName, $propOrigName)
    {
        static::$cache[$className]['propMap'][$propOrigName] = $propMappedName;
        static::$cache[$className]['revPropMap'][$propMappedName] = $propOrigName;
    }

    /**
     * @param $fromObject
     * @return array
     * @throws \ReflectionException
     */
    private static function getPropertyTree($fromObject)
    {
        $className = get_class($fromObject);
        $properties = static::getPropertiesMap($className);
        $mappedObject = [];

        foreach ($properties as $propOrigName => $propMappedName) {
            $method = 'get' . ucwords($propOrigName);
            if (method_exists($fromObject, $method)) {
                $val = $fromObject->{$method}();
                if (is_array($val)) {
                    foreach ($val as $k => $subVal) {
                        $mappedObject[$propMappedName][$k] = is_object($subVal)
                            ? static::getPropertyTree($subVal)
                            : $subVal;
                    }
                } else if (is_object($val)) {
                    $mappedObject[$propMappedName] = static::getPropertyTree($val);
                } else {
                    $mappedObject[$propMappedName] = $val;
                }
            }
        }
        return $mappedObject;
    }
}
