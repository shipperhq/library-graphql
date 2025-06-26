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


use ShipperHQ\GraphQL\Response\Data\PlaceOrderData;

/**
 * Class PlaceOrder
 * @package ShipperHQ\GraphQL\Response
 */
class PlaceOrder implements ResponseInterface
{
    /**
     * @var \ShipperHQ\GraphQL\Response\Data\PlaceOrderData
     */
    private $data;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * AbstractResponse constructor.
     * @param \ShipperHQ\GraphQL\Response\Data\PlaceOrderData $data
     * @param Error[] $errors
     */
    public function __construct(PlaceOrderData $data, array $errors)
    {
        $this->data = $data;
        $this->errors = $errors;
    }

    /**
     * @return \ShipperHQ\GraphQL\Response\Data\PlaceOrderData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \ShipperHQ\GraphQL\Response\Data\PlaceOrderData|null $data
     * @return PlaceOrder
     */
    public function setData(?PlaceOrderData $data)
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
     * @return PlaceOrder
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }


}
