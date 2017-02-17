<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 12:45 PM
 */

namespace MercadoPago\Entity\Transaction\PaymentMethods;


class PaymentMethodEntity 
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $paymentTypeId;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $secureThumbnail;
    /**
     * @var string
     */
    protected $thumbnail;
    /**
     * @var string
     */
    protected $deferredCapture;

    /**
     * @var SettingsEntity
     */
    protected $settings;
    /**
     * @var array
     */
    protected $additionalInfoNeeded;
    /**
     * @var float
     */
    protected $minAllowedAmount;
    /**
     * @var float
     */
    protected $maxAllowedAmount;
    /**
     * @var float
     */
    protected $accreditationTime;

    /**
     * @var FinancialInstitutionsEntity
     */
    protected $financialInstitutions;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return PaymentMethodEntity
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return PaymentMethodEntity
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return PaymentMethodEntity
     */
    public function setPaymentTypeId($paymentTypeId)
    {
        $this->paymentTypeId = $paymentTypeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return PaymentMethodEntity
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecureThumbnail()
    {
        return $this->secureThumbnail;
    }

    /**
     * @param string $secureThumbnail
     * @return PaymentMethodEntity
     */
    public function setSecureThumbnail($secureThumbnail)
    {
        $this->secureThumbnail = $secureThumbnail;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     * @return PaymentMethodEntity
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeferredCapture()
    {
        return $this->deferredCapture;
    }

    /**
     * @param string $deferredCapture
     * @return PaymentMethodEntity
     */
    public function setDeferredCapture($deferredCapture)
    {
        $this->deferredCapture = $deferredCapture;
        return $this;
    }

    /**
     * @return SettingsEntity
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @param SettingsEntity $settings
     * @return PaymentMethodEntity
     */
    public function setSettings($settings)
    {
        $this->settings = $settings;
        return $this;
    }

    /**
     * @return array
     */
    public function getAdditionalInfoNeeded()
    {
        return $this->additionalInfoNeeded;
    }

    /**
     * @param array $additionalInfoNeeded
     * @return PaymentMethodEntity
     */
    public function setAdditionalInfoNeeded($additionalInfoNeeded)
    {
        $this->additionalInfoNeeded = $additionalInfoNeeded;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinAllowedAmount()
    {
        return $this->minAllowedAmount;
    }

    /**
     * @param float $minAllowedAmount
     * @return PaymentMethodEntity
     */
    public function setMinAllowedAmount($minAllowedAmount)
    {
        $this->minAllowedAmount = $minAllowedAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxAllowedAmount()
    {
        return $this->maxAllowedAmount;
    }

    /**
     * @param float $maxAllowedAmount
     * @return PaymentMethodEntity
     */
    public function setMaxAllowedAmount($maxAllowedAmount)
    {
        $this->maxAllowedAmount = $maxAllowedAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAccreditationTime()
    {
        return $this->accreditationTime;
    }

    /**
     * @param float $accreditationTime
     * @return PaymentMethodEntity
     */
    public function setAccreditationTime($accreditationTime)
    {
        $this->accreditationTime = $accreditationTime;
        return $this;
    }

    /**
     * @return FinancialInstitutionsEntity
     */
    public function getFinancialInstitutions()
    {
        return $this->financialInstitutions;
    }

    /**
     * @param FinancialInstitutionsEntity $financialInstitutions
     * @return PaymentMethodEntity
     */
    public function setFinancialInstitutions($financialInstitutions)
    {
        $this->financialInstitutions = $financialInstitutions;
        return $this;
    }



}