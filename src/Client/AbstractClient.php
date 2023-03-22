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

use Laminas\Http\Client;
use Laminas\Http\Request;
use ShipperHQ\GraphQL\Helpers\Serializer;
use ShipperHQ\GraphQL\Request\AbstractHeaders;

abstract class AbstractClient
{
    protected static function getQueryStr($query) {
        // Must map __DIR__ to a local var AND use full path or else we get odd results with xdebug
        $dir = __DIR__;
        return include($dir . "/../Queries/$query.php");
    }

    /**
     * @param                      $serializedRequest
     * @param                      $responseClassName
     * @param                      $endpoint
     * @param                      $timeout
     * @param null|AbstractHeaders $headers
     * @param bool                 $useZendClient Set to false when using with WooCommerce
     *
     * @return array
     */
    protected function sendRequest($serializedRequest, $responseClassName, $endpoint, $timeout, $headers = null, $useZendClient = true): array
    {
        $debugData = [
            "settings" => compact('endpoint', 'timeout'),
            "headers" => $headers ? $headers->toArray() : [],
            "request" => $serializedRequest
        ];

        $responseBody = '{}';
        $args = [
            'maxredirects' => 0,
            'timeout'      => $timeout,
            'useragent'    => "ShipperHQ GraphQL Library",
        ];

        try {
            if ($useZendClient) {
                $client = new Client($endpoint, $args);
                if ($headers) {
                    $client->setHeaders($headers->toArray());
                }
                $client->setRawBody($serializedRequest);
                $client->setEncType('application/json');
                $response = $client->setMethod(Request::METHOD_POST)->send();
                if ($response !== null) {
                    $responseBody = $response->getBody() ?: "{}";
                }
            } else {
                $args['headers'] = $headers->toArray();
                $args['headers']['Content-Type'] = 'application/json';
                $args['body'] = $serializedRequest;

                $response = wp_remote_post($endpoint, $args);
                if ($response !== null) {
                    $responseBody = wp_remote_retrieve_body($response) ?: "{}";
                }
            }

            $debugData['response'] = json_encode(json_decode($responseBody), JSON_PRETTY_PRINT);
            $responseBody = Serializer::deserialize($responseBody, $responseClassName);
        } catch (\Exception $e) {
            $debugData['error'] = ['error' => $e->getMessage(), 'code' => $e->getCode()];
        }

        $result = ['result' => $responseBody, 'debug' => $debugData];

        return $result;
    }
}
