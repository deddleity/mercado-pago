<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 9/02/17
 * Time: 02:51 PM
 */

namespace MercadoPago\Entity\Transaction\PaymentMethods;


class BinEntity
{
    /**
     * @var string
     */
    protected $pattern;

    /**
     * @var string
     */
    protected $exclusionPattern;

    /**
     * @var string
     */
    protected $installmentsPattern;

    /**
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     * @return BinEntity
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
        return $this;
    }

    /**
     * @return string
     */
    public function getExclusionPattern()
    {
        return $this->exclusionPattern;
    }

    /**
     * @param string $exclusionPattern
     * @return BinEntity
     */
    public function setExclusionPattern($exclusionPattern)
    {
        $this->exclusionPattern = $exclusionPattern;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstallmentsPattern()
    {
        return $this->installmentsPattern;
    }

    /**
     * @param string $installmentsPattern
     * @return BinEntity
     */
    public function setInstallmentsPattern($installmentsPattern)
    {
        $this->installmentsPattern = $installmentsPattern;
        return $this;
    }


}