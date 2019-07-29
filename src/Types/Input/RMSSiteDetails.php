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
 * Class RMSSiteDetails
 */
class RMSSiteDetails
{
    /**
     * @var string
     */
    private $appVersion;

    /**
     * @var string
     */
    private $ecommerceCart;

    /**
     * @var string
     */
    private $ecommerceVersion;

    /**
     * @var string
     */
    private $websiteUrl;

    /**
     * @var string
     */
    private $ipAddress;

    /**
     * RMSSiteDetails constructor.
     * @param string $appVersion
     * @param string $ecommerceCart
     * @param string $ecommerceVersion
     * @param string $websiteUrl
     * @param string $ipAddress
     */
    public function __construct($appVersion, $ecommerceCart, $ecommerceVersion, $websiteUrl, $ipAddress)
    {
        $this->appVersion = $appVersion;
        $this->ecommerceCart = $ecommerceCart;
        $this->ecommerceVersion = $ecommerceVersion;
        $this->websiteUrl = $websiteUrl;
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return string
     */
    public function getAppVersion()
    {
        return $this->appVersion;
    }

    /**
     * @param string $appVersion
     */
    public function setAppVersion($appVersion)
    {
        $this->appVersion = $appVersion;
    }

    /**
     * @return string
     */
    public function getEcommerceCart()
    {
        return $this->ecommerceCart;
    }

    /**
     * @param string $ecommerceCart
     */
    public function setEcommerceCart($ecommerceCart)
    {
        $this->ecommerceCart = $ecommerceCart;
    }

    /**
     * @return string
     */
    public function getEcommerceVersion()
    {
        return $this->ecommerceVersion;
    }

    /**
     * @param string $ecommerceVersion
     */
    public function setEcommerceVersion($ecommerceVersion)
    {
        $this->ecommerceVersion = $ecommerceVersion;
    }

    /**
     * @return string
     */
    public function getWebsiteUrl()
    {
        return $this->websiteUrl;
    }

    /**
     * @param string $websiteUrl
     */
    public function setWebsiteUrl($websiteUrl)
    {
        $this->websiteUrl = $websiteUrl;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

}