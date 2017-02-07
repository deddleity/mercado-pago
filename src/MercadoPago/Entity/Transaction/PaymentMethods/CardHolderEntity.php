<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 12:19 PM
 */

namespace MercadoPago\Entity\Transaction\PaymentMethods;


use MercadoPago\Entity\Transaction\Payer\IdentificationEntity;

class CardHolderEntity
{
    /**
     * @var IdentificationEntity
     */
    protected $identification;
    /**
     * @var string
     * @JMS\Type("string")
     */
    protected $name;

    /**
     * @return IdentificationEntity
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * @param IdentificationEntity $identification
     * @return CardholderEntity
     */
    public function setIdentification($identification)
    {
        $this->identification = $identification;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CardholderEntity
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}