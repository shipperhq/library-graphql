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

namespace ShipperHQ\GraphQL\Types\Input;

/**
 * Class ListingDetail
 */
class ListingDetail
{

    /**
     * @var string
     */
    private $shipmentId;

    /**
     * @var string
     */
    private $shippingMethodCode;

    /**
     * @var float
     */
    private $freightCharges;

    /**
     * ListingDetail constructor.
     * @param string $shipmentId
     * @param string $shippingMethodCode
     * @param float $freightCharges
     */
    public function __construct($shipmentId, $shippingMethodCode, $freightCharges)
    {
        $this->shipmentId = $shipmentId;
        $this->shippingMethodCode = $shippingMethodCode;
        $this->freightCharges = $freightCharges;
    }

    /**
     * @return string
     */
    public function getShipmentId()
    {
        return $this->shipmentId;
    }

    /**
     * @param string $shipmentId
     */
    public function setShipmentId($shipmentId)
    {
        $this->shipmentId = $shipmentId;
    }

    /**
     * @return string
     */
    public function getShippingMethodCode()
    {
        return $this->shippingMethodCode;
    }

    /**
     * @param string $shippingMethodCode
     */
    public function setShippingMethodCode($shippingMethodCode)
    {
        $this->shippingMethodCode = $shippingMethodCode;
    }

    /**
     * @return float
     */
    public function getFreightCharges()
    {
        return $this->freightCharges;
    }

    /**
     * @param float $freightCharges
     */
    public function setFreightCharges($freightCharges)
    {
        $this->freightCharges = $freightCharges;
    }
    
}