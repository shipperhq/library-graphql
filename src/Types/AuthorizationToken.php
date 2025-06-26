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

namespace ShipperHQ\GraphQL\Types;

/**
 * Class BasicShippingQuote
 */
class AuthorizationToken
{
    /**
     * @var string
     */
    private $token;

    /**
     * AuthorizationToken constructor.
     * @param string $token
     */
    public function __construct(String $token)
    {
        $this->setToken($token);
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return $this
     */
    public function setToken(String $token)
    {
        $this->token = $token;
        return $this;
    }
}
