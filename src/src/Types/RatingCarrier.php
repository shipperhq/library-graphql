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
 * Class RatingCarrier
 */
class RatingCarrier
{

    /**
     * @var string
     */
    private $carrierCode;

    /**
     * @var string
     */
    private $carrierTitle;

    /**
     * @var string
     */
    private $carrierType;

    /**
     * @var RMSError
     */
    private $error;

    /**
     * @var BasicShippingRate[]
     */
    private $shippingRates;

    /**
     * RatingCarrier constructor.
     * @param string $carrierCode
     * @param string $carrierTitle
     * @param string $carrierType
     * @param RMSError $error
     * @param BasicShippingRate[] $shippingRates
     */
    public function __construct($carrierCode, $carrierTitle, $carrierType, RMSError $error, array $shippingRates)
    {
        $this->setCarrierCode($carrierCode)
            ->setCarrierTitle($carrierTitle)
            ->setCarrierType($carrierType)
            ->setError($error)
            ->setShippingRates($shippingRates);
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
     * @return RatingCarrier
     */
    public function setCarrierCode($carrierCode)
    {
        $this->carrierCode = $carrierCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrierTitle()
    {
        return $this->carrierTitle;
    }

    /**
     * @param string $carrierTitle
     * @return RatingCarrier
     */
    public function setCarrierTitle($carrierTitle)
    {
        $this->carrierTitle = $carrierTitle;
        return $this;
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
     * @return RatingCarrier
     */
    public function setCarrierType($carrierType)
    {
        $this->carrierType = $carrierType;
        return $this;
    }

    /**
     * @return RMSError
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param RMSError $error
     * @return RatingCarrier
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return BasicShippingRate[]
     */
    public function getShippingRates()
    {
        return $this->shippingRates;
    }

    /**
     * @param BasicShippingRate[] $shippingRates
     * @return RatingCarrier
     */
    public function setShippingRates($shippingRates)
    {
        $this->shippingRates = $shippingRates;
        return $this;
    }
}