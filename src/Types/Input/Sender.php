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
 * Class Sender
 */
class Sender
{

    /**
     * @var string
     */
    private $originName;


    /**
     * Sender constructor.
     * @param string $originName
     */
    public function __construct($originName)
    {
        $this->originName = $originName;
    }

    /**
     * @return string
     */
    public function getOriginName()
    {
        return $this->originName;
    }

    /**
     * @param string $originName
     */
    public function setOriginName($originName)
    {
        $this->originName = $originName;
    }

}
