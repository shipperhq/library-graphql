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

class GetFinalShippingChosenData implements ResponseDataInterface
{
    /**
     * @var \ShipperHQ\GraphQL\Types\SelectedShippingRates[]|null
     */
    private $getFinalShippingChosen;

    /**
     * @return \ShipperHQ\GraphQL\Types\SelectedShippingRates[]|null
     */
    public function getGetFinalShippingChosen(): ?array
    {
        return $this->getFinalShippingChosen;
    }

    /**
     * @param \ShipperHQ\GraphQL\Types\SelectedShippingRates[]|null $getFinalShippingChosen
     * @return GetFinalShippingChosenData
     */
    public function setGetFinalShippingChosen(?array $getFinalShippingChosen): GetFinalShippingChosenData
    {
        $this->getFinalShippingChosen = $getFinalShippingChosen;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->getFinalShippingChosen);
    }
}
