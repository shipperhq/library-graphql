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

namespace ShipperHQ\GraphQL\Response\Data;

class PlaceOrderData implements ResponseDataInterface
{
    /**
     * @var int
     */
    private $placeOrder;

    /**
     * @return int
     */
    public function getPlaceOrder()
    {
        return $this->placeOrder;
    }

    /**
     * @param int $placeOrder
     * @return PlaceOrderData
     */
    public function setPlaceOrder(int $placeOrder)
    {
        $this->placeOrder = $placeOrder;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return $this->placeOrder === null;
    }
}