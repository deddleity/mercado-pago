<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 11:51 AM
 */

namespace MercadoPago\Entity\Transaction\Payer;


class PhoneEntity
{
    /**
     * @var string
     */
    protected $areaCode;
    /**
     * @var string
     */
    protected $number;

    /**
     * @var string
     */
    protected $extension;


    /**
     * @return string
     */
    public function getAreaCode()
    {
        return $this->areaCode;
    }

    /**
     * @param string $areaCode
     * @return PhoneEntity
     */
    public function setAreaCode($areaCode)
    {
        $this->areaCode = $areaCode;
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
     * @return PhoneEntity
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     * @return PhoneEntity
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

}