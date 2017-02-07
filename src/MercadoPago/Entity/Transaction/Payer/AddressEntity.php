<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 11:51 AM
 */

namespace MercadoPago\Entity\Transaction\Payer;


class AddressEntity
{
    /**
     * @var string
     */
    protected $streetName;
    /**
     * @var string
     */
    protected $streetNumber;
    /**
     * @var string
     */
    protected $zipCode;

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     * @return AddressEntity
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * @param string $streetNumber
     * @return AddressEntity
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return AddressEntity
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }
}