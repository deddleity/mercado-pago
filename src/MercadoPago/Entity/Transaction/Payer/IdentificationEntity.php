<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 11:48 AM
 */

namespace MercadoPago\Entity\Transaction\Payer;

class IdentificationEntity 
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $number;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     * @return IdentificationEntity
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return IdentificationEntity
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}