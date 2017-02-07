<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 04:07 PM
 */

namespace MercadoPago\Entity\Transaction\Order;


class TransactionDetailsEntity
{
    /**
     * @var float
     */
    protected $netReceivedAmount;
    /**
     * @var float
     */
    protected $totalPaidAmount;
    /**
     * @var float
     */
    protected $overpaidAmount;
    /**
     * @var string
     */
    protected $externalResourceUrl;
    /**
     * @var integer
     */
    protected $installmentAmount;
    /**
     * @var string
     */
    protected $financialInstitution;
    /**
     * @var string
     */
    protected $paymentMethodReferenceId;

    /**
     * @return float
     */
    public function getNetReceivedAmount()
    {
        return $this->netReceivedAmount;
    }

    /**
     * @param float $netReceivedAmount
     * @return TransactionDetailsEntity
     */
    public function setNetReceivedAmount($netReceivedAmount)
    {
        $this->netReceivedAmount = $netReceivedAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaidAmount()
    {
        return $this->totalPaidAmount;
    }

    /**
     * @param float $totalPaidAmount
     * @return TransactionDetailsEntity
     */
    public function setTotalPaidAmount($totalPaidAmount)
    {
        $this->totalPaidAmount = $totalPaidAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getOverpaidAmount()
    {
        return $this->overpaidAmount;
    }

    /**
     * @param float $overpaidAmount
     * @return TransactionDetailsEntity
     */
    public function setOverpaidAmount($overpaidAmount)
    {
        $this->overpaidAmount = $overpaidAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalResourceUrl()
    {
        return $this->externalResourceUrl;
    }

    /**
     * @param string $externalResourceUrl
     * @return TransactionDetailsEntity
     */
    public function setExternalResourceUrl($externalResourceUrl)
    {
        $this->externalResourceUrl = $externalResourceUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstallmentAmount()
    {
        return $this->installmentAmount;
    }

    /**
     * @param int $installmentAmount
     * @return TransactionDetailsEntity
     */
    public function setInstallmentAmount($installmentAmount)
    {
        $this->installmentAmount = $installmentAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinancialInstitution()
    {
        return $this->financialInstitution;
    }

    /**
     * @param string $financialInstitution
     * @return TransactionDetailsEntity
     */
    public function setFinancialInstitution($financialInstitution)
    {
        $this->financialInstitution = $financialInstitution;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodReferenceId()
    {
        return $this->paymentMethodReferenceId;
    }

    /**
     * @param string $paymentMethodReferenceId
     * @return TransactionDetailsEntity
     */
    public function setPaymentMethodReferenceId($paymentMethodReferenceId)
    {
        $this->paymentMethodReferenceId = $paymentMethodReferenceId;
        return $this;
    }
}