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

namespace ShipperHQ\GraphQL\Helpers;

class LoggingHelper
{
    /**
     * @param array $tokenResult
     * @return mixed
     */
    public function prepAuthResponseForLogging(array $tokenResult)
    {
        $debugResult = $tokenResult['debug'];
        $debugResult = $this->sanitizeAuthCode($debugResult);
        $debugResult = $this->sanitizeAuthToken($debugResult);
        return $debugResult;
    }

    /**
     * @param $debugResult
     * @return mixed
     */
    private function sanitizeAuthCode($debugResult)
    {
        if (isset($debugResult['request'])) {
            $debugResult['request'] = json_decode($debugResult['request'], true);
            if (isset($debugResult['request']['variables']['auth_code'])) {
                $debugResult['request']['variables']['auth_code'] = 'SANITIZED';
            }
        }
        return $debugResult;
    }

    /**
     * @param $debugResult
     * @return mixed
     */
    private function sanitizeAuthToken($debugResult)
    {
        if (isset($debugResult['response'])) {
            $debugResult['response'] = json_decode($debugResult['response'], true);
            if (isset($debugResult['response']['data']['createSecretToken']['token'])) {
                $debugResult['response']['data']['createSecretToken']['token'] = 'SANITIZED';
            }
        }
        return $debugResult;
    }
}
