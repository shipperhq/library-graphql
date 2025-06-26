<?php
/**
 * ShipperHQ
 *
 * @category ShipperHQ
 * @package ShipperHQ\GraphQL
 * @copyright Copyright (c) 2019 Zowta LTD and Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */

namespace ShipperHQ\GraphQL\Response;

class Error
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var \ShipperHQ\GraphQL\Response\Error\Location[]
     */
    private $locations;

    /**
     * @var string[]
     */
    private $path;

    /**
     * Error constructor.
     * @param string $message
     * @param \ShipperHQ\GraphQL\Response\Error\Location[] $locations
     * @param string[] $path
     */
    public function __construct(string $message, array $locations, array $path)
    {
        $this->message = $message;
        $this->locations = $locations;
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Error
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return \ShipperHQ\GraphQL\Response\Error\Location[]
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @param \ShipperHQ\GraphQL\Response\Error\Location[] $locations
     * @return Error
     */
    public function setLocations(array $locations)
    {
        $this->locations = $locations;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string[] $path
     * @return Error
     */
    public function setPath(array $path)
    {
        $this->path = $path;
        return $this;
    }
}
