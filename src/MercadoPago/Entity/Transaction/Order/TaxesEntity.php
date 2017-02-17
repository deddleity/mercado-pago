<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 13/02/17
 * Time: 11:18 AM
 */

namespace MercadoPago\Entity\Transaction\Order;


class TaxesEntity
{
    /**
     * @var float
     */
    protected $value;

    /**
     * @var string
     */
    protected $type;

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return TaxesEntity
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return TaxesEntity
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

}