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
query{
  getFinalShippingChosen{
    externalQuoteId
    shipmentId
    carrierCode
    methodCode
    selectedDate
    selectedPickupId
    selectedTimeSlot
    selectedOptions {
      code
      value
    }
  }
}
graphql;
