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

class Request
{
    /**
     * @var string
     */
    private $query;

    /**
     * @var array
     */
    private $variables;

    /**
     * Request constructor.
     * @param string $query
     * @param array $variables
     */
    public function __construct(string $query, array $variables)
    {
        $this->query = $query;
        $this->variables = $variables;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param string $query
     * @return Request
     */
    public function setQuery(string $query)
    {
        $this->query = $query;
        return $this;
    }

    /**
     * @return array
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * @param array $variables
     * @return Request
     */
    public function setVariables(array $variables)
    {
        $this->variables = $variables;
        return $this;
    }
}