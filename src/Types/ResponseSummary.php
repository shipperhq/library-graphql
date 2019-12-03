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
 * Class ResponseSummary
 */
class ResponseSummary
{
    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var int
     */
    private $status;


    /**
     * ResponseSummary constructor.
     * @param string $date
     * @param string $version
     * @param string $transactionId
     * @param int $status
     */
    public function __construct($date, $version, $transactionId, $status)
    {
        $this->setDate($date)
            ->setVersion($version)
            ->setTransactionId($transactionId)
            ->setStatus($status);
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return ResponseSummary
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return ResponseSummary
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
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
     * @return ResponseSummary
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return ResponseSummary
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}