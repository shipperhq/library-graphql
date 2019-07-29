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
 * Class RMSCart
 */
class RMSCart
{

    /**
     * @var RMSItem[]
     */
    private $items;

    /**
     * @var float
     */
    private $declaredValue;

    /**
     * @var boolean
     */
    private $freeShipping;

    /**
     * RMSCart constructor.
     * @param RMSItem[] $items
     * @param float $declaredValue
     * @param bool $freeShipping
     */
    public function __construct(array $items, $declaredValue, $freeShipping)
    {
        $this->setItems($items)
            ->setDeclaredValue($declaredValue)
            ->setFreeShipping($freeShipping);
    }

    /**
     * @return RMSItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param RMSItem[] $items
     * @return RMSCart
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }

    /**
     * @param float $declaredValue
     * @return RMSCart
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->declaredValue = (float) $declaredValue;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFreeShipping()
    {
        return $this->freeShipping;
    }

    /**
     * @param bool $freeShipping
     * @return RMSCart
     */
    public function setFreeShipping($freeShipping)
    {
        $this->freeShipping = $freeShipping;
        return $this;
    }
}