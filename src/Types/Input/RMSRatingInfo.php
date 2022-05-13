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

use ShipperHQ\GraphQL\Exception\SerializerException;

/**
 * Class RMSRatingInfo
 */
class RMSRatingInfo
{
    const AVAILABLE_CART_TYPES = [
        "STD",
        "CART",
        "MAC",
        "MAC_PICKUP",
        "ACCOUNT",
        "INTERNAL"
    ];

    /**
     * @var RMSCart
     */
    private $cart;

    /**
     * @var RMSDestination
     */
    private $destination;

    /**
     * @var RMSCustomer
     */
    private $customer;

    /**
     * @var string
     */
    private $cartType;

    /**
     * @var RMSRequestedOptions
     */
    private $requestedOptions;

    /**
     * @var RMSSiteDetails
     */
    private $siteDetails;

    /**
     * RMSRatingInfo constructor.
     * @param RMSCart $cart
     * @param RMSDestination $destination
     * @param RMSCustomer $customer
     * @param string $cartType
     * @param RMSRequestedOptions $requestedOptions
     * @throws SerializerException
     */
    public function __construct(RMSCart $cart, RMSDestination $destination, RMSCustomer $customer, $cartType, RMSSiteDetails $siteDetails, RMSRequestedOptions $requestedOptions = null)
    {
        $this->setCart($cart)
            ->setDestination($destination)
            ->setCustomer($customer)
            ->setCartType($cartType)
            ->setRequestedOptions($requestedOptions);
        $this->setSiteDetails($siteDetails);

    }

    /**
     * @return RMSCart
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * @param RMSCart $cart
     * @return RMSRatingInfo
     */
    public function setCart($cart)
    {
        $this->cart = $cart;
        return $this;
    }

    /**
     * @return RMSDestination
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param RMSDestination $destination
     * @return RMSRatingInfo
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * @return RMSCustomer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param RMSCustomer $customer
     * @return RMSRatingInfo
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return string
     */
    public function getCartType()
    {
        return $this->cartType;
    }

    /**
     * @param string $cartType
     * @return RMSRatingInfo
     * @throws SerializerException
     */
    public function setCartType($cartType)
    {
        $cartType = strtoupper((string) $cartType);

        if (in_array($cartType, self::AVAILABLE_CART_TYPES)) {
            $this->cartType = $cartType;
        }
        else {
            throw new SerializerException("Cart type is not valid");
        }

        return $this;
    }

    /**
     * @return RMSRequestedOptions
     */
    public function getRequestedOptions()
    {
        return $this->requestedOptions;
    }

    /**
     * @param RMSRequestedOptions $requestedOptions
     * @return RMSRatingInfo
     */
    public function setRequestedOptions($requestedOptions)
    {
        $this->requestedOptions = $requestedOptions;
        return $this;
    }

    /**
     * @return RMSSiteDetails
     */
    public function getSiteDetails()
    {
        return $this->siteDetails;
    }

    /**
     * @param RMSSiteDetails $siteDetails
     */
    public function setSiteDetails($siteDetails)
    {
        $this->siteDetails = $siteDetails;
    }

}
