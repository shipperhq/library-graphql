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

namespace ShipperHQ\GraphQL\Request;

/**
 * Class EmptyHeaders
 * @package ShipperHQ\GraphQL\Request
 */
class EmptyHeaders extends AbstractHeaders
{
    /**
     * @return array
     */
    public function toArray()
    {
        return [];
    }
}