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
use ShipperHQ\GraphQL\Request\AbstractHeaders;

abstract class AbstractClient
{
    protected static function getQueryStr($query) {
        // Must map __DIR__ to a local var AND use full path or else we get odd results with xdebug
        $dir = __DIR__;
        return include($dir . "/../Queries/$query.php");
    }

    /**
     * @param $serializedRequest
     * @param $responseClassName
     * @param $endpoint
     * @param $timeout
     * @param null|AbstractHeaders $headers
     * @return array
     */
    protected function sendRequest($serializedRequest, $responseClassName, $endpoint, $timeout, $headers = null): array
    {
        $debugData = [
            "settings" => compact('endpoint', 'timeout'),
            "headers" => $headers ? $headers->toArray() : [],
            "request" => $serializedRequest
        ];

        $responseBody = '{}';
        try {
            $client = new \Zend_Http_Client(
                $endpoint,
                [
                    'maxredirects' => 0,
                    'timeout' => $timeout,
                    'useragent' => "ShipperHQ GraphQL Library"
                ]
            );
            if ($headers) {
                $client->setHeaders($headers->toArray());
            }
            $client->setRawData($serializedRequest, 'application/json');
            $response = $client->request(\Zend_Http_Client::POST);
            if ($response !== null) {
                $responseBody = $response->getBody() ?: "{}";
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
