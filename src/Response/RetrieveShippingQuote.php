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

namespace ShipperHQ\GraphQL\Response;


use ShipperHQ\GraphQL\Response\Data\RetrieveShippingQuoteData;

class RetrieveShippingQuote implements ResponseInterface
{
    /**
     * @var \ShipperHQ\GraphQL\Response\Data\RetrieveShippingQuoteData
     */
    private $data;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * AbstractResponse constructor.
     * @param \ShipperHQ\GraphQL\Response\Data\RetrieveShippingQuoteData $data
     * @param Error[] $errors
     */
    public function __construct(RetrieveShippingQuoteData $data, array $errors)
    {
        $this->data = $data;
        $this->errors = $errors;
    }

    /**
     * @return \ShipperHQ\GraphQL\Response\Data\RetrieveShippingQuoteData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \ShipperHQ\GraphQL\Response\Data\RetrieveShippingQuoteData $data
     * @return RetrieveShippingQuote
     */
    public function setData(RetrieveShippingQuoteData $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return Error[]|null
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param Error[]|null $errors
     * @return RetrieveShippingQuote
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }


}
