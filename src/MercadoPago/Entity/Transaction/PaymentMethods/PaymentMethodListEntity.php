<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 02:13 PM
 */

namespace MercadoPago\Entity\Transaction\PaymentMethods;


class PaymentMethodListEntity
{
    /**
     * @var integer
     */
    protected $installments;
    /**
     * @var string
     */
    protected $defaultPaymentMethodId;
    /**
     * @var integer
     */
    protected $defaultInstallments;

    /**
     * @return int
     */
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * @param int $installments
     * @return PaymentMethodListEntity
     */
    public function setInstallments($installments)
    {
        $this->installments = $installments;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultPaymentMethodId()
    {
        return $this->defaultPaymentMethodId;
    }

    /**
     * @param string $defaultPaymentMethodId
     * @return PaymentMethodListEntity
     */
    public function setDefaultPaymentMethodId($defaultPaymentMethodId)
    {
        $this->defaultPaymentMethodId = $defaultPaymentMethodId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultInstallments()
    {
        return $this->defaultInstallments;
    }

    /**
     * @param int $defaultInstallments
     * @return PaymentMethodListEntity
     */
    public function setDefaultInstallments($defaultInstallments)
    {
        $this->defaultInstallments = $defaultInstallments;
        return $this;
    }
}