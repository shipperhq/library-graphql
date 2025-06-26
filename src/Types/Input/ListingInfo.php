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
 * Class ListingInfo
 */
class ListingInfo
{

    /**
     * @var Carrier
     */
    private $carrier;

    /**
     * @var Sender
     */
    private $sender;

    /**
     * @var  Address
     */
    private $recipient;

    /**
     * @var Listing[]
     */
    private $listings;

    /**
     * @var  RMSSiteDetails
     */
    private $siteDetails;

    /**
     * ListingRequest constructor.
     * @param Carrier $carrier
     * @param Sender $sender
     * @param Address $recipient
     * @param Listing[] $listings
     * @param RMSSiteDetails $siteDetails
     */
    public function __construct(Carrier $carrier, Sender $sender, Address $recipient, array $listings, RMSSiteDetails $siteDetails)
    {
        $this->carrier = $carrier;
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->listings = $listings;
        $this->siteDetails = $siteDetails;
    }

    /**
     * @return Carrier
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param Carrier $carrier
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
    }

    /**
     * @return Sender
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param Sender $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return Address
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param Address $recipient
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
    }

    /**
     * @return Listing[]
     */
    public function getListings()
    {
        return $this->listings;
    }

    /**
     * @param Listing[] $listings
     */
    public function setListings($listings)
    {
        $this->listings = $listings;
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
