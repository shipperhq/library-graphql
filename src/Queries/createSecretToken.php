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

return <<<'graphql'
mutation CreateSecretToken($api_key: String!, $auth_code: String!){
  createSecretToken(api_key: $api_key, auth_code: $auth_code){
    token
  }
}
graphql;

?>