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

namespace ShipperHQ\GraphQL\Response\Data;

use ShipperHQ\GraphQL\Types\AuthorizationToken;

class CreateSecretTokenData implements ResponseDataInterface
{
    /**
     * @var \ShipperHQ\GraphQL\Types\AuthorizationToken
     */
    private $createSecretToken;

    /**
     * CreateSecretTokenData constructor.
     * @param AuthorizationToken|null $authorizationToken
     */
    public function __construct(?AuthorizationToken $authorizationToken = null)
    {
        $this->createSecretToken = $authorizationToken;
    }

    /**
     * @return AuthorizationToken
     */
    public function getCreateSecretToken()
    {
        return $this->createSecretToken;
    }

    /**
     * @param AuthorizationToken|null $createSecretToken
     * @return CreateSecretTokenData
     */
    public function setCreateSecretToken(?AuthorizationToken $createSecretToken = null)
    {
        $this->createSecretToken = $createSecretToken;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return $this->createSecretToken === null;
    }
}
