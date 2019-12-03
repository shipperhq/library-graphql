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
 * Class RMSCustomer
 */
class RMSRequestedOptions
{

    /**
     * @var string
     */
    private $shipmentId;

    /**
     * @var string
     */
    private $carrierCode;

    /**
     * @var string
     */
    private $selectedDate;

    /**
     * @var string
     */
    private $selectedPickupId;

    /**
     * RMSRequestedOptions constructor.
     * @param string $shipmentId
     * @param string $carrierCode
     * @param string $selectedDate
     * @param string $selectedPickupId
     */
    public function __construct($shipmentId, $carrierCode, $selectedDate, $selectedPickupId)
    {
        $this->setShipmentId($shipmentId)
            ->setCarrierCode($carrierCode)
            ->setSelectedDate($selectedDate)
            ->setSelectedPickupId($selectedPickupId);
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
     * @return RMSRequestedOptions
     */
    public function setShipmentId($shipmentId)
    {
        $this->shipmentId = $shipmentId;
        return $this;
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
     * @return RMSRequestedOptions
     */
    public function setCarrierCode($carrierCode)
    {
        $this->carrierCode = $carrierCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSelectedDate()
    {
        return $this->selectedDate;
    }

    /**
     * @param string $selectedDate
     * @return RMSRequestedOptions
     */
    public function setSelectedDate($selectedDate)
    {
        $this->selectedDate = $selectedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getSelectedPickupId()
    {
        return $this->selectedPickupId;
    }

    /**
     * @param string $selectedPickupId
     * @return RMSRequestedOptions
     */
    public function setSelectedPickupId($selectedPickupId)
    {
        $this->selectedPickupId = $selectedPickupId;
        return $this;
    }
}