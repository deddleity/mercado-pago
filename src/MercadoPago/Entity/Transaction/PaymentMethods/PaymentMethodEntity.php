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
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     */
    public function setPaymentTypeId($paymentTypeId)
    {
        $this->paymentTypeId = $paymentTypeId;
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
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     */
    public function setSecureThumbnail($secureThumbnail)
    {
        $this->secureThumbnail = $secureThumbnail;
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
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
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
     */
    public function setDeferredCapture($deferredCapture)
    {
        $this->deferredCapture = $deferredCapture;
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
     */
    public function setAdditionalInfoNeeded($additionalInfoNeeded)
    {
        $this->additionalInfoNeeded = $additionalInfoNeeded;
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
     */
    public function setMinAllowedAmount($minAllowedAmount)
    {
        $this->minAllowedAmount = $minAllowedAmount;
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
     */
    public function setMaxAllowedAmount($maxAllowedAmount)
    {
        $this->maxAllowedAmount = $maxAllowedAmount;
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
     */
    public function setAccreditationTime($accreditationTime)
    {
        $this->accreditationTime = $accreditationTime;
    }
}