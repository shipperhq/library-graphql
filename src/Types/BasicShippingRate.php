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
 * Class BasicShippingRate
 */
class BasicShippingRate
{

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $title;

    /**
     * @var float
     */
    private $totalCharges;

    /**
     * BasicShippingRate constructor.
     * @param string $code
     * @param string $title
     * @param float $totalCharges
     */
    public function __construct($code, $title, $totalCharges)
    {
        $this->setCode($code)
            ->setTitle($title)
            ->setTotalCharges($totalCharges);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return BasicShippingRate
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return BasicShippingRate
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalCharges()
    {
        return $this->totalCharges;
    }

    /**
     * @param float $totalCharges
     * @return BasicShippingRate
     */
    public function setTotalCharges($totalCharges)
    {
        $this->totalCharges = $totalCharges;
        return $this;
    }
}