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
 * Class ListingOutput
 */
class ListingOutput
{
    /**
     * @var ResponseSummary
     */
    private $responseSummary;

    /**
     * @var RMSError[]
     */
    private $errors;

    /**
     * ListingOutput constructor.
     * @param ResponseSummary $responseSummary
     * @param RMSError[] $errors
     */
    public function __construct($responseSummary, array $errors)
    {
        $this->setResponseSummary($responseSummary)
            ->setErrors($errors);
    }

    /**
     * @return ResponseSummary
     */
    public function getResponseSummary()
    {
        return $this->responseSummary;
    }

    /**
     * @param ResponseSummary $responseSummary
     * @return ListingOutput
     */
    public function setResponseSummary($responseSummary)
    {
        $this->responseSummary = $responseSummary;
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
     * @return ListingOutput
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }
}