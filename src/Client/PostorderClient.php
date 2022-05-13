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
     * @param ListingInfo   $listingInfo
     * @param               $endpoint
     * @param               $timeout
     * @param SecureHeaders $headers
     * @param bool          $useZendClient
     *
     * @return array
     * @throws \ReflectionException
     */
    public function createListing($listingInfo, $endpoint, $timeout, SecureHeaders $headers, $useZendClient = true)
    {
        $variables = compact('listingInfo');

        $request = new Request(
            self::getQueryStr('createListing'),
            $variables
        );

        $serializedRequest = Serializer::serialize($request, JSON_PRETTY_PRINT);

        $response = $this->sendRequest($serializedRequest, CreateListing::class, $endpoint, $timeout, $headers, $useZendClient);

        $response = $this->filterImageFromDebuggingData($response);

        return $response;
    }

    /**
     * @param array $response
     * @return array
     */
    private function filterImageFromDebuggingData($response) {
        $debugRequestString = (string) $response['debug']['request'];

        $response['debug']['request'] = preg_replace("/(\"image\"\s*:\s*\")(.{1,10})(.*?)\"/m", "$1$2...\"", $debugRequestString);

        return $response;
    }
}
