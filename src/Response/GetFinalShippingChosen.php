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

use ShipperHQ\GraphQL\Response\Data\GetFinalShippingChosenData;

class GetFinalShippingChosen implements ResponseInterface
{
    /**
     * @var GetFinalShippingChosenData
     */
    private $data;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * AbstractResponse constructor.
     * @param GetFinalShippingChosenData $data
     * @param Error[] $errors
     */
    public function __construct(GetFinalShippingChosenData $data, array $errors)
    {
        $this->data = $data;
        $this->errors = $errors;
    }

    /**
     * @return GetFinalShippingChosenData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param GetFinalShippingChosenData $data
     * @return GetFinalShippingChosen
     */
    public function setData(GetFinalShippingChosenData $data)
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
     * @return GetFinalShippingChosen
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }


}
