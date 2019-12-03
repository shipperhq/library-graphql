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
 * Class RMSError
 */
class RMSError
{

    /**
     * @var int
     */
    private $errorCode;

    /**
     * @var string
     */
    private $internalErrorMessage;

    /**
     * @var string
     */
    private $externalErrorMessage;

    /**
     * @var int
     */
    private $priority;

    /**
     * RMSError constructor.
     * @param int $errorCode
     * @param string $internalErrorMessage
     * @param string $externalErrorMessage
     * @param int $priority
     */
    public function __construct($errorCode, $internalErrorMessage, $externalErrorMessage, $priority)
    {
        $this->setErrorCode($errorCode)
            ->setInternalErrorMessage($internalErrorMessage)
            ->setExternalErrorMessage($externalErrorMessage)
            ->setPriority($priority);
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param int $errorCode
     * @return RMSError
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalErrorMessage()
    {
        return $this->internalErrorMessage;
    }

    /**
     * @param string $internalErrorMessage
     * @return RMSError
     */
    public function setInternalErrorMessage($internalErrorMessage)
    {
        $this->internalErrorMessage = $internalErrorMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalErrorMessage()
    {
        return $this->externalErrorMessage;
    }

    /**
     * @param string $externalErrorMessage
     * @return RMSError
     */
    public function setExternalErrorMessage($externalErrorMessage)
    {
        $this->externalErrorMessage = $externalErrorMessage;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     * @return RMSError
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }
}