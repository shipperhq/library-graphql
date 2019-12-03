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

namespace ShipperHQ\GraphQL\Types;

/**
 * Class BasicShippingQuote
 */
class BasicShippingQuote
{
    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var RatingCarrier[]
     */
    private $carriers;

    /**
     * @var RMSError[]
     */
    private $errors;

    /**
     * BasicShippingQuote constructor.
     * @param string $transactionId
     * @param RatingCarrier[] $carriers
     * @param RMSError[] $errors
     */
    public function __construct($transactionId, array $carriers, array $errors)
    {
        $this->setTransactionId($transactionId)
            ->setCarriers($carriers)
            ->setErrors($errors);
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return BasicShippingQuote
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return RatingCarrier[]
     */
    public function getCarriers()
    {
        return $this->carriers;
    }

    /**
     * @param RatingCarrier[] $carriers
     * @return BasicShippingQuote
     */
    public function setCarriers($carriers)
    {
        $this->carriers = $carriers;
        return $this;
    }

    /**
     * @return RMSError[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param RMSError[] $errors
     * @return BasicShippingQuote
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }
}