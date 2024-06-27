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
query retrieveShippingQuote($ratingInfo: RMSRatingInfo!) {
  retrieveShippingQuote(ratingInfo: $ratingInfo) {
    transactionId
    carriers {
      carrierCode
      carrierTitle
      shippingRates {
        code
        title
        totalCharges
      }
      error {
        errorCode
        internalErrorMessage
        externalErrorMessage
        priority
      }
    }
    errors {
      errorCode
      internalErrorMessage
      externalErrorMessage
      priority
    }
  }
}
graphql;
