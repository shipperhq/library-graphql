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

use ShipperHQ\GraphQL\Response\Data\CreateSecretTokenData;

class CreateSecretToken implements ResponseInterface
{
    /**
     * @var \ShipperHQ\GraphQL\Response\Data\CreateSecretTokenData|null
     */
    private $data;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * CreateSecretToken constructor.
     * @param CreateSecretTokenData|null $data
     * @param array $errors
     */
    public function __construct(CreateSecretTokenData $data, array $errors)
    {
        $this->data = $data;
        $this->errors = $errors;
    }

    /**
     * @return null|CreateSecretTokenData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Warning: keep the full type name in param annotation
     * @param null|\ShipperHQ\GraphQL\Response\Data\CreateSecretTokenData $data
     * @return CreateSecretToken
     */
    public function setData($data)
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
     * @param array $errors
     * @return CreateSecretToken
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }


}
