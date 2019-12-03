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

namespace ShipperHQ\GraphQL\Response;

use ShipperHQ\GraphQL\Response\Data\CreateListingData;

class CreateListing implements ResponseInterface
{
    /**
     * @var \ShipperHQ\GraphQL\Response\Data\CreateListingData
     */
    private $data;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * CreateListing constructor.
     * @param CreateListingData $data
     * @param Error[] $errors
     */
    public function __construct(CreateListingData $data, array $errors)
    {
        $this->data = $data;
        $this->errors = $errors;
    }

    /**
     * @return \ShipperHQ\GraphQL\Response\Data\CreateListingData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \ShipperHQ\GraphQL\Response\Data\CreateListingData $data
     * @return CreateListing
     */
    public function setData(CreateListingData $data)
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
     * @return CreateListing
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }


}