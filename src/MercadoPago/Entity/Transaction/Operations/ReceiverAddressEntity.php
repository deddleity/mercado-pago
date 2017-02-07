<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 03:47 PM
 */

namespace MercadoPago\Entity\Transaction\Operations;


class ReceiverAddressEntity
{
    /**
     * @var string
     */
    protected $zipCode;
    /**
     * @var string
    */
    protected $streetNumber;
    /**
     * @var string
     */
    protected $streetName;
    /**
     * @var string
     */
    protected $floor;
    /**
     * @var string
     */
    protected $apartment;

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return ReceiverAddressEntity
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
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
     * @return ReceiverAddressEntity
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     * @return ReceiverAddressEntity
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param string $floor
     * @return ReceiverAddressEntity
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
        return $this;
    }

    /**
     * @return string
     */
    public function getApartment()
    {
        return $this->apartment;
    }

    /**
     * @param string $apartment
     * @return ReceiverAddressEntity
     */
    public function setApartment($apartment)
    {
        $this->apartment = $apartment;
        return $this;
    }
}