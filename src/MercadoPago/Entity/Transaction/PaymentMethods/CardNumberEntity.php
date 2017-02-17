<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 9/02/17
 * Time: 02:56 PM
 */

namespace MercadoPago\Entity\Transaction\PaymentMethods;


class CardNumberEntity
{

    /**
     * @var string
     */
    protected $length;

    /**
     * @var string
     */
    protected $validation;

    /**
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param string $length
     * @return CardNumberEntity
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * @param string $validation
     * @return CardNumberEntity
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;
        return $this;
    }

    
}