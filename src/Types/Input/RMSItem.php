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

use ShipperHQ\GraphQL\Exception\SerializerException;

/**
 * Class RMSItem
 */
class RMSItem
{

    const AVAILABLE_ITEM_TYPES = [
        "BUNDLE",
        "VIRTUAL",
        "CONFIGURABLE",
        "SIMPLE",
        "GIFTCARD",
        "DOWNLOADABLE",
        "GROUPED"
    ];

    /**
     * @var string
     */
    private $itemId;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $storePrice;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var int
     */
    private $qty;

    /**
     * @var string
     */
    private $type;

    /**
     * @var float
     */
    private $basePrice;

    /**
     * @var float
     */
    private $taxInclBasePrice;

    /**
     * @var float
     */
    private $taxInclStorePrice;

    /**
     * @var float
     */
    private $discountPercent;

    /**
     * @var float
     */
    private $discountedBasePrice;

    /**
     * @var float
     */
    private $discountedStorePrice;

    /**
     * @var float
     */
    private $discountedTaxInclBasePrice;

    /**
     * @var float
     */
    private $discountedTaxInclStorePrice;

    /**
     * @var boolean
     */
    private $freeShipping;

    /**
     * @var boolean
     */
    private $fixedPrice;

    /**
     * @var boolean
     */
    private $fixedWeight;

    /**
     * @var RMSAttribute[]
     */
    private $attributes;

    /**
     * @var RMSItem[]
     */
    private $items;

    /**
     * RMSItem constructor.
     * @param string $itemId
     * @param string $sku
     * @param string $name
     * @param float $storePrice
     * @param float $weight
     * @param int $qty
     * @param string $type
     * @param float $taxInclStorePrice
     * @param bool $freeShipping
     * @param bool $fixedPrice
     * @param bool $fixedWeight
     * @param float|null $basePrice
     * @param float|null $taxInclBasePrice
     * @param float|null $discountPercent
     * @param float|null $discountedBasePrice
     * @param float|null $discountedStorePrice
     * @param float|null $discountedTaxInclBasePrice
     * @param float|null $discountedTaxInclStorePrice
     * @param RMSAttribute[] $attributes
     * @param RMSItem[] $items
     * @throws SerializerException
     */
    public function __construct(
        $itemId,
        $sku,
        $name,
        $storePrice,
        $weight,
        $qty,
        $type,
        $taxInclStorePrice,
        $freeShipping,
        $fixedPrice,
        $fixedWeight,
        ?float $basePrice = null,
        ?float $taxInclBasePrice = null,
        ?float $discountPercent = null,
        ?float $discountedBasePrice = null,
        ?float $discountedStorePrice = null,
        ?float $discountedTaxInclBasePrice = null,
        ?float $discountedTaxInclStorePrice = null,
        ?array $attributes = null,
        ?array $items = null
    ) {
        $this->setItemId($itemId)
            ->setSku($sku)
            ->setName($name)
            ->setStorePrice($storePrice)
            ->setWeight($weight)
            ->setQty($qty)
            ->setType($type)
            ->setBasePrice($basePrice)
            ->setTaxInclBasePrice($taxInclBasePrice)
            ->setTaxInclStorePrice($taxInclStorePrice)
            ->setDiscountPercent($discountPercent)
            ->setDiscountedBasePrice($discountedBasePrice)
            ->setDiscountedStorePrice($discountedStorePrice)
            ->setDiscountedTaxInclBasePrice($discountedTaxInclBasePrice)
            ->setDiscountedTaxInclStorePrice($discountedTaxInclStorePrice)
            ->setFreeShipping($freeShipping)
            ->setFixedPrice($fixedPrice)
            ->setFixedWeight($fixedWeight)
            ->setAttributes($attributes)
            ->setItems($items);
    }

    /**
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param string $itemId
     * @return RMSItem
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     * @return RMSItem
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return RMSItem
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getStorePrice()
    {
        return $this->storePrice;
    }

    /**
     * @param float $storePrice
     * @return RMSItem
     */
    public function setStorePrice($storePrice)
    {
        $this->storePrice = $storePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return RMSItem
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return int
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param int $qty
     * @return RMSItem
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return RMSItem
     * @throws SerializerException
     */
    public function setType($type)
    {
        $type = strtoupper($type);

        if (in_array($type, self::AVAILABLE_ITEM_TYPES)) {
            $this->type = $type;
        } else {
            throw new SerializerException("Item type is not valid");
        }

        return $this;
    }

    /**
     * @return float
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * @param float $basePrice
     * @return RMSItem
     */
    public function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxInclBasePrice()
    {
        return $this->taxInclBasePrice;
    }

    /**
     * @param float $taxInclBasePrice
     * @return RMSItem
     */
    public function setTaxInclBasePrice($taxInclBasePrice)
    {
        $this->taxInclBasePrice = $taxInclBasePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxInclStorePrice()
    {
        return $this->taxInclStorePrice;
    }

    /**
     * @param float $taxInclStorePrice
     * @return RMSItem
     */
    public function setTaxInclStorePrice($taxInclStorePrice)
    {
        $this->taxInclStorePrice = $taxInclStorePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercent()
    {
        return $this->discountPercent;
    }

    /**
     * @param float $discountPercent
     * @return RMSItem
     */
    public function setDiscountPercent($discountPercent)
    {
        $this->discountPercent = $discountPercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountedBasePrice()
    {
        return $this->discountedBasePrice;
    }

    /**
     * @param float $discountedBasePrice
     * @return RMSItem
     */
    public function setDiscountedBasePrice($discountedBasePrice)
    {
        $this->discountedBasePrice = $discountedBasePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountedStorePrice()
    {
        return $this->discountedStorePrice;
    }

    /**
     * @param float $discountedStorePrice
     * @return RMSItem
     */
    public function setDiscountedStorePrice($discountedStorePrice)
    {
        $this->discountedStorePrice = $discountedStorePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountedTaxInclBasePrice()
    {
        return $this->discountedTaxInclBasePrice;
    }

    /**
     * @param float $discountedTaxInclBasePrice
     * @return RMSItem
     */
    public function setDiscountedTaxInclBasePrice($discountedTaxInclBasePrice)
    {
        $this->discountedTaxInclBasePrice = $discountedTaxInclBasePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountedTaxInclStorePrice()
    {
        return $this->discountedTaxInclStorePrice;
    }

    /**
     * @param float $discountedTaxInclStorePrice
     * @return RMSItem
     */
    public function setDiscountedTaxInclStorePrice($discountedTaxInclStorePrice)
    {
        $this->discountedTaxInclStorePrice = $discountedTaxInclStorePrice;
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
     * @return bool
     */
    public function getFreeShipping()
    {
        return $this->freeShipping;
    }

    /**
     * @param bool $freeShipping
     * @return RMSItem
     */
    public function setFreeShipping($freeShipping)
    {
        $this->freeShipping = $freeShipping;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFixedPrice()
    {
        return $this->fixedPrice;
    }

    /**
     * @param bool $fixedPrice
     * @return RMSItem
     */
    public function setFixedPrice($fixedPrice)
    {
        $this->fixedPrice = $fixedPrice;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFixedWeight()
    {
        return $this->fixedWeight;
    }

    /**
     * @param bool $fixedWeight
     * @return RMSItem
     */
    public function setFixedWeight($fixedWeight)
    {
        $this->fixedWeight = $fixedWeight;
        return $this;
    }

    /**
     * @return RMSAttribute[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param RMSAttribute[] $attributes
     * @return RMSItem
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
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
     * @return RMSItem
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }
}
