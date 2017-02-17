<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 9/02/17
 * Time: 02:48 PM
 */

namespace MercadoPago\Entity\Transaction\PaymentMethods;


class SettingsEntity
{
    /**
     * @var BinEntity
     */
    protected $bin;

    /**
     * @var CardNumberEntity
     */
    protected $cardNumber;

    /**
     * @var SecurityCodeEntity
     */
    protected $securityCode;

    /**
     * @return BinEntity
     */
    public function getBin()
    {
        return $this->bin;
    }

    /**
     * @param BinEntity $bin
     * @return SettingsEntity
     */
    public function setBin($bin)
    {
        $this->bin = $bin;
        return $this;
    }

    /**
     * @return CardNumberEntity
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param CardNumberEntity $cardNumber
     * @return SettingsEntity
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    /**
     * @return SecurityCodeEntity
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * @param SecurityCodeEntity $securityCode
     * @return SettingsEntity
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;
        return $this;
    }


}