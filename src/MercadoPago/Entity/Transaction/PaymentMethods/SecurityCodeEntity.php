<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 9/02/17
 * Time: 02:58 PM
 */

namespace MercadoPago\Entity\Transaction\PaymentMethods;


class SecurityCodeEntity
{
    /**
     * @var string
     */
    protected $mode;

    /**
     * @var integer
     */
    protected $length;

    /**
     * @var string
     */
    protected $cardLocation;

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     * @return SecurityCodeEntity
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int $length
     * @return SecurityCodeEntity
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardLocation()
    {
        return $this->cardLocation;
    }

    /**
     * @param string $cardLocation
     * @return SecurityCodeEntity
     */
    public function setCardLocation($cardLocation)
    {
        $this->cardLocation = $cardLocation;
        return $this;
    }


}