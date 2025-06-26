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

namespace ShipperHQ\GraphQL\Types\Input;


/**
 * Class RMSCustomer
 */
class RMSCustomer
{

    /**
     * @var string
     */
    private $customerGroup;

    /**
     * RMSCustomer constructor.
     * @param string $customerGroup
     */
    public function __construct($customerGroup)
    {
        $this->setCustomerGroup($customerGroup);
    }

    /**
     * @return string
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup;
    }

    /**
     * @param string $customerGroup
     * @return RMSCustomer
     */
    public function setCustomerGroup($customerGroup)
    {
        $this->customerGroup = $customerGroup;
        return $this;
    }
}
