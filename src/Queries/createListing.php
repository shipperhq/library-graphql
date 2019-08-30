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
query CreateListing($listingInfo: ListingInfoInput) {
  createListing(listingInfo: $listingInfo) {
    listingId
    errors {
      errorCode
      internalErrorMessage
      externalErrorMessage
    }
    responseSummary {
      date
      version
      transactionId
      status
    }
  }
}
graphql;

?>