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

namespace ShipperHQ\GraphQL\Response\Data;

use ShipperHQ\GraphQL\Types\ListingOutput;

class CreateListingData implements ResponseDataInterface
{
    /**
     * @var \ShipperHQ\GraphQL\Types\ListingOutput
     */
    private $createListing;

    /**
     * @return \ShipperHQ\GraphQL\Types\ListingOutput
     */
    public function getCreateListing()
    {
        return $this->createListing;
    }

    /**
     * @param \ShipperHQ\GraphQL\Types\ListingOutput $createListing
     * @return CreateListingData
     */
    public function setCreateListing($createListing)
    {
        $this->createListing = $createListing;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return $this->createListing === null;
    }
}