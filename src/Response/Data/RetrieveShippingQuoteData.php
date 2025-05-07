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

namespace ShipperHQ\GraphQL\Response\Data;


use ShipperHQ\GraphQL\Types\BasicShippingQuote;

class RetrieveShippingQuoteData implements ResponseDataInterface
{
    /**
     * @var \ShipperHQ\GraphQL\Types\BasicShippingQuote
     */
    private $retrieveShippingQuote;

    /**
     * RetrieveShippingQuoteData constructor.
     * @param \ShipperHQ\GraphQL\Types\BasicShippingQuote|null $retrieveShippingQuote
     */
    public function __construct(?BasicShippingQuote $retrieveShippingQuote = null)
    {
        $this->retrieveShippingQuote = $retrieveShippingQuote;
    }

    /**
     * @return \ShipperHQ\GraphQL\Types\BasicShippingQuote
     */
    public function getRetrieveShippingQuote()
    {
        return $this->retrieveShippingQuote;
    }

    /**
     * @param \ShipperHQ\GraphQL\Types\BasicShippingQuote|null $retrieveShippingQuote
     * @return RetrieveShippingQuoteData
     */
    public function setRetrieveShippingQuote(?BasicShippingQuote $retrieveShippingQuote = null)
    {
        $this->retrieveShippingQuote = $retrieveShippingQuote;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return $this->retrieveShippingQuote === null;
    }
}