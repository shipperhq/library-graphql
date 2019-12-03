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
 * Class Listing
 */
class Listing
{

    /**
     * @var ListingDetail
     */
    private $listingDetail;

    /**
     * @var Piece[]
     */
    private $pieces;

    /**
     * Listing constructor.
     * @param ListingDetail $listingDetail
     * @param Piece[] $pieces
     */
    public function __construct(ListingDetail $listingDetail, array $pieces)
    {
        $this->listingDetail = $listingDetail;
        $this->pieces = $pieces;
    }

    /**
     * @return ListingDetail
     */
    public function getListingDetail()
    {
        return $this->listingDetail;
    }

    /**
     * @param ListingDetail $listingDetail
     */
    public function setListingDetail($listingDetail)
    {
        $this->listingDetail = $listingDetail;
    }

    /**
     * @return Piece[]
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * @param Piece[] $pieces
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;
    }


}