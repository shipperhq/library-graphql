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

namespace ShipperHQ\GraphQL\Types;

/**
 * Class BasicShippingQuote
 */
class SelectedShippingRates
{
    /**
     * @var string
     */
    private $externalQuoteId;

    /**
     * @var string
     */
    private $shipmentId;

    /**
     * @var string|null
     */
    private $carrierCode;

    /**
     * @var string|null
     */
    private $methodCode;

    /**
     * @var string|null
     */
    private $selectedDate;

    /**
     * @var string|null
     */
    private $selectedPickupId;

    /**
     * @var string|null
     */
    private $selectedTimeSlot;

    /**
     * @var SelectedRateOption[]|null
     */
    private $selectedOptions;

    /**
     * @return string
     */
    public function getExternalQuoteId(): string
    {
        return $this->externalQuoteId;
    }

    /**
     * @param string $externalQuoteId
     * @return SelectedShippingRates
     */
    public function setExternalQuoteId(string $externalQuoteId): SelectedShippingRates
    {
        $this->externalQuoteId = $externalQuoteId;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentId(): string
    {
        return $this->shipmentId;
    }

    /**
     * @param string $shipmentId
     * @return SelectedShippingRates
     */
    public function setShipmentId(string $shipmentId): SelectedShippingRates
    {
        $this->shipmentId = $shipmentId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }

    /**
     * @param string|null $carrierCode
     * @return SelectedShippingRates
     */
    public function setCarrierCode(?string $carrierCode): SelectedShippingRates
    {
        $this->carrierCode = $carrierCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMethodCode(): ?string
    {
        return $this->methodCode;
    }

    /**
     * @param string|null $methodCode
     * @return SelectedShippingRates
     */
    public function setMethodCode(?string $methodCode): SelectedShippingRates
    {
        $this->methodCode = $methodCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSelectedDate(): ?string
    {
        return $this->selectedDate;
    }

    /**
     * @param string|null $selectedDate
     * @return SelectedShippingRates
     */
    public function setSelectedDate(?string $selectedDate): SelectedShippingRates
    {
        $this->selectedDate = $selectedDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSelectedPickupId(): ?string
    {
        return $this->selectedPickupId;
    }

    /**
     * @param string|null $selectedPickupId
     * @return SelectedShippingRates
     */
    public function setSelectedPickupId(?string $selectedPickupId): SelectedShippingRates
    {
        $this->selectedPickupId = $selectedPickupId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSelectedTimeSlot(): ?string
    {
        return $this->selectedTimeSlot;
    }

    /**
     * @param string|null $selectedTimeSlot
     * @return SelectedShippingRates
     */
    public function setSelectedTimeSlot(?string $selectedTimeSlot): SelectedShippingRates
    {
        $this->selectedTimeSlot = $selectedTimeSlot;
        return $this;
    }

    /**
     * @return SelectedRateOption[]|null
     */
    public function getSelectedOptions(): ?array
    {
        return $this->selectedOptions;
    }

    /**
     * @param SelectedRateOption[]|null $selectedOptions
     * @return SelectedShippingRates
     */
    public function setSelectedOptions(?array $selectedOptions): SelectedShippingRates
    {
        $this->selectedOptions = $selectedOptions;
        return $this;
    }
}
