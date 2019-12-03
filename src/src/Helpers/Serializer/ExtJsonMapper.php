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

namespace ShipperHQ\GraphQL\Helpers\Serializer;


use ReflectionClass;

class ExtJsonMapper extends \JsonMapper
{
    /**
     * @param ReflectionClass $rc
     * @param string $name
     * @return array
     */
    public function getPropertyDetails(ReflectionClass $rc, string $propName)
    {
        return parent::inspectProperty($rc, $propName);
    }

    /**
     * @param $type
     * @return bool
     */
    public function doesTypeNeedMapping($type)
    {
        return !parent::isSimpleType($type);
    }

    /**
     * Overridden so we can use types with hyphens. Don't see a real reason to restrict them, seems over-eager to do so
     *
     * @param string $name
     * @return string
     */
    protected function getSafeName($name)
    {
        return $name;
    }


}