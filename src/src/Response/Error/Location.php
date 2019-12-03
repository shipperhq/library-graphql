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

namespace ShipperHQ\GraphQL\Response\Error;


class Location
{
    /**
     * @var int
     */
    private $line;

    /**
     * @var int
     */
    private $column;

    /**
     * Location constructor.
     * @param int $line
     * @param int $column
     */
    public function __construct(int $line, int $column)
    {
        $this->line = $line;
        $this->column = $column;
    }

    /**
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param int $line
     * @return Location
     */
    public function setLine(int $line)
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @return int
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * @param int $column
     * @return Location
     */
    public function setColumn(int $column)
    {
        $this->column = $column;
        return $this;
    }
}