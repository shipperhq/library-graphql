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

namespace ShipperHQ\GraphQL\Request;

/**
 * Class SecureHeaders
 * @package ShipperHQ\GraphQL\Request
 */
class SecureHeaders extends AbstractHeaders
{
    /**
     * @var string
     * @jsonSerializeAs X-ShipperHQ-Secret-Token
     */
    private $secretToken;

    /**
     * @var string
     * @jsonSerializeAs X-ShipperHQ-Scope
     */
    private $scope;

    /**
     * @var string
     * @jsonSerializeAs X-ShipperHQ-Session
     */
    private $session;

    /**
     * Headers constructor.
     * @param string $secretToken
     * @param string $scope
     * @param string $session
     */
    public function __construct(string $secretToken, string $scope, string $session)
    {
        $this->setSecretToken($secretToken);
        $this->setScope($scope);
        $this->setSession($session);
    }

    /**
     * @return string
     */
    public function getSecretToken()
    {
        return $this->secretToken;
    }

    /**
     * @param string $secretToken
     * @return SecureHeaders
     */
    public function setSecretToken(string $secretToken)
    {
        $this->secretToken = $secretToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     * @return SecureHeaders
     */
    public function setScope(string $scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * @param string $session
     * @return SecureHeaders
     */
    public function setSession(string $session)
    {
        $this->session = $session;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'X-ShipperHQ-Secret-Token' => $this->getSecretToken(),
            'X-ShipperHQ-Scope' => $this->getScope(),
            'X-ShipperHQ-Session' => $this->getSession()
        ];
    }
}