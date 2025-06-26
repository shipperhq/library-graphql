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

namespace ShipperHQ\GraphQL\Client;

use ShipperHQ\GraphQL\Helpers\Serializer;
use ShipperHQ\GraphQL\Request\SecureHeaders;
use ShipperHQ\GraphQL\Request\Request;
use ShipperHQ\GraphQL\Response\CreateSecretToken;
use ShipperHQ\GraphQL\Response\GetFinalShippingChosen;
use ShipperHQ\GraphQL\Response\PlaceOrder;
use ShipperHQ\GraphQL\Response\RetrieveShippingQuote;
use ShipperHQ\GraphQL\Types\Input\RMSRatingInfo;

class GraphQLClient extends AbstractClient
{

    /**
     * @param String $api_key
     * @param String $auth_code
     * @param $endpoint
     * @param $timeout
     * @param SecureHeaders $headers
     * @return array
     * @throws \ReflectionException
     */
    public function createSecretToken(String $api_key, String $auth_code, $endpoint, $timeout)
    {
        $request = new Request(
            self::getQueryStr('createSecretToken'),
            compact('api_key', 'auth_code')
        );

        $serializedRequest = Serializer::serialize($request, JSON_PRETTY_PRINT);

        return $this->sendRequest($serializedRequest, CreateSecretToken::class, $endpoint, $timeout);
    }

    /**
     * @param RMSRatingInfo $ratingInfo
     * @param $endpoint
     * @param $timeout
     * @param SecureHeaders $headers
     * @return array
     * @throws \ReflectionException
     */
    public function retrieveShippingQuote(RMSRatingInfo $ratingInfo, $endpoint, $timeout, SecureHeaders $headers)
    {
        $request = new Request(
            self::getQueryStr('retrieveShippingQuote'),
            compact('ratingInfo')
        );

        $serializedRequest = Serializer::serialize($request, JSON_PRETTY_PRINT);

        return $this->sendRequest($serializedRequest, RetrieveShippingQuote::class, $endpoint, $timeout, $headers);
    }

    /**
     * @param RMSRatingInfo $ratingInfo
     * @param $endpoint
     * @param $timeout
     * @param SecureHeaders $headers
     * @return array
     * @throws \ReflectionException
     */
    public function getFinalShippingChosen($endpoint, $timeout, SecureHeaders $headers)
    {
        $request = new Request(
            self::getQueryStr('getFinalShippingChosen'),
            []
        );

        $serializedRequest = Serializer::serialize($request, JSON_PRETTY_PRINT);

        return $this->sendRequest($serializedRequest, GetFinalShippingChosen::class, $endpoint, $timeout, $headers);
    }

    /**
     * @param $orderNumber
     * @param $totalCharges
     * @param $carrierCode
     * @param $methodCode
     * @param $orderDate
     * @param $recipient
     * @param $endpoint
     * @param $timeout
     * @param SecureHeaders $headers
     *
     * @return array
     * @throws \ReflectionException
     */
    public function placeOrder($orderNumber, $totalCharges, $carrierCode, $methodCode, $orderDate, $recipient,
        $endpoint, $timeout, SecureHeaders $headers)
    {
        $variables = compact('orderNumber', 'totalCharges', 'carrierCode', 'methodCode');
        $variables['totalCharges'] = (float) $variables['totalCharges'];
        $variables['recipient'] = $recipient;

        try {
            $orderDateTime = new \DateTime($orderDate);
            $iso8601 = $orderDateTime->format(\DateTimeInterface::ATOM);
            $variables['orderDate'] = $iso8601;
        } catch (\Exception $e) {
            // Don't do anything. It's a optional field
        }

        $request = new Request(
            self::getQueryStr('placeOrder'),
            $variables
        );

        $serializedRequest = Serializer::serialize($request, JSON_PRETTY_PRINT);

        return $this->sendRequest($serializedRequest, PlaceOrder::class, $endpoint, $timeout, $headers);

    }
}
