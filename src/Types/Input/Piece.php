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

namespace ShipperHQ\GraphQL\Types\Input;

use ShipperHQ\GraphQL\Exception\SerializerException;

/**
 * Class Piece
 */
class Piece
{
    
   
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $referenceId;

    /**
     * @var int
     */
    private $declaredValue;

    /**
     * @var int
     */
    private $weight;

    /**
     * @var int
     */
    private $length;

    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * Piece constructor.
     * @param int $id
     * @param string $referenceId
     * @param int $declaredValue
     * @param int $weight
     * @param int $length
     * @param int $width
     * @param int $height
     */
    public function __construct($id, $referenceId, $declaredValue, $weight, $length, $width, $height)
    {
        $this->id = $id;
        $this->referenceId = $referenceId;
        $this->declaredValue = $declaredValue;
        $this->weight = $weight;
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param string $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @return int
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }

    /**
     * @param int $declaredValue
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->declaredValue = $declaredValue;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }


}