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

return <<<'graphql'
mutation PlaceOrder(
  $orderNumber: String!,
  $totalCharges: Float!,
  $carrierCode: String!,
  $methodCode: String!,
  $recipient: AddressInput!,
  $orderDate: DateTime
) {
  placeOrder(
    orderNumber: $orderNumber,
    totalCharges: $totalCharges,
    carrierCode: $carrierCode,
    methodCode: $methodCode,
    recipient: $recipient,
    orderDate: $orderDate
  )
}
graphql;

