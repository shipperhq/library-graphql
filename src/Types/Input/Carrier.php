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

namespace ShipperHQ\GraphQL\Types\Input;

/**
 * Class Carrier
 */
class Carrier
{

    /**
     * @var string
     */
    private $carrierType;

    /**
     * @var string
     */
    private $carrierCode;

    /**
     * Carrier constructor.
     * @param string $carrierType
     * @param string $carrierCode
     */
    public function __construct($carrierType, $carrierCode)
    {
        $this->carrierType = $carrierType;
        $this->carrierCode = $carrierCode;
    }

    /**
     * @return string
     */
    public function getCarrierType()
    {
        return $this->carrierType;
    }

    /**
     * @param string $carrierType
     */
    public function setCarrierType($carrierType)
    {
        $this->carrierType = $carrierType;
    }

    /**
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

    /**
     * @param string $carrierCode
     */
    public function setCarrierCode($carrierCode)
    {
        $this->carrierCode = $carrierCode;
    }


}
