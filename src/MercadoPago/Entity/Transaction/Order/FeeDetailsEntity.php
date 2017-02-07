<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 12:37 PM
 */

namespace MercadoPago\Entity\Transaction\Order;


class FeeDetailsEntity
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var string
     */
    protected $feePayer;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return FeeDetailsEntity
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return FeeDetailsEntity
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeePayer()
    {
        return $this->feePayer;
    }

    /**
     * @param string $feePayer
     * @return FeeDetailsEntity
     */
    public function setFeePayer($feePayer)
    {
        $this->feePayer = $feePayer;
        return $this;
    }
}