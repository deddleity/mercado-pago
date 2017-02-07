<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 12:38 PM
 */

namespace MercadoPago\Entity\Transaction\PaymentMethods;


use MercadoPago\Entity\Transaction\Operations\IssuerEntity;

class InstallmentOptionsEntity
{
    /**
     * @var string
     */
    protected $paymentMethodId;
    /**
     * @var string
     */
    protected $paymentTypeId;
    /**
     * @var IssuerEntity
     */
    protected $issuer;
    /**
     * @var array
     */
    protected $payerCosts;

    /**
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @param string $paymentMethodId
     * @return InstallmentOptionsEntity
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentTypeId()
    {
        return $this->paymentTypeId;
    }

    /**
     * @param string $paymentTypeId
     * @return InstallmentOptionsEntity
     */
    public function setPaymentTypeId($paymentTypeId)
    {
        $this->paymentTypeId = $paymentTypeId;
        return $this;
    }

    /**
     * @return IssuerEntity
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * @param IssuerEntity $issuer
     * @return InstallmentOptionsEntity
     */
    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * @return array
     */
    public function getPayerCosts()
    {
        return $this->payerCosts;
    }

    /**
     * @param array $payerCosts
     * @return InstallmentOptionsEntity
     */
    public function setPayerCosts($payerCosts)
    {
        $this->payerCosts = $payerCosts;
        return $this;
    }
}