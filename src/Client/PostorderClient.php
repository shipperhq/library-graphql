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

namespace ShipperHQ\GraphQL\Client;

use ShipperHQ\GraphQL\Helpers\Serializer;
use ShipperHQ\GraphQL\Request\Request;
use ShipperHQ\GraphQL\Request\SecureHeaders;
use ShipperHQ\GraphQL\Response\CreateListing;
use ShipperHQ\GraphQL\Types\Input\ListingInfo;

class PostorderClient extends AbstractClient
{
    /**
     * @param ListingInfo $listingInfo
     * @param $endpoint
     * @param $timeout
     * @param SecureHeaders $headers
     * @return array
     * @throws \ReflectionException
     */
    public function createListing($listingInfo, $endpoint, $timeout, SecureHeaders $headers)
    {
        $variables = compact('listingInfo');

        $request = new Request(
            self::getQueryStr('createListing'),
            $variables
        );

        $serializedRequest = Serializer::serialize($request, JSON_PRETTY_PRINT);

        return $this->sendRequest($serializedRequest, CreateListing::class, $endpoint, $timeout, $headers);
    }
}
