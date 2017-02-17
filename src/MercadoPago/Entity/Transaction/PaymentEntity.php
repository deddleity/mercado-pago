<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 04:04 PM
 */

namespace MercadoPago\Entity\Transaction;


use MercadoPago\Entity\Transaction\Order\FeeDetailsEntity;
use MercadoPago\Entity\Transaction\Order\TaxesEntity;
use MercadoPago\Entity\Transaction\Order\TransactionDetailsEntity;
use MercadoPago\Entity\Transaction\Payer\PayerEntity;
use MercadoPago\Entity\Transaction\PaymentMethods\AdditionalInfoEntity;
use MercadoPago\Entity\Transaction\PaymentMethods\CardEntity;

class PaymentEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $dateCreated;

    /**
     * @var string
     */
    protected $dateApproved;

    /**
     * @var string
     */
    protected $dateLastUpdate;

    /**
     * @var string
     */
    protected $moneyReleaseDate;

    /**
     * @var integer
     */
    protected $collectorId;

    /**
     * @var string
     */
    protected $operationType;

    /**
     * @var PayerEntity
     */
    protected $payer;

    /**
     * @var bool
     */
    protected $binaryMode;

    /**
     * @var bool
     */
    protected $liveMode;

    /**
     * @var array
     */
    protected $order;

    /**
     * @var string
     */
    protected $externalReference;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var array
     */
    protected $metadata;

    /**
     * @var string
     */
    protected $currencyId;
    /**
     * @var float
     */
    protected $transactionAmount;

    /**
     * @var float
     */
    protected $netAmount;

    /**
     * @var array
     */
    protected $taxes;
    
    /**
     * @var float
     */
    protected $transactionAmountRefunded;

    /**
     * @var float
     */
    protected $couponAmount;

    /**
     * @var integer
     */
    protected $campaignId;

    /**
     * @var string
     */
    protected $couponCode;

    /**
     * @var TransactionDetailsEntity
     */
    protected $transactionDetails;

    /**
     * @var array
     */
    protected $feeDetails;

    /**
     * @var integer
     */
    protected $differentialPricingId;

    /**
     * @var float
     */
    protected $applicationFee;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $statusDetail;

    /**
     * @var bool
     */
    protected $capture;

    /**
     * @var bool
     */
    protected $captured;

    /**
     * @var string
     */
    protected $callForAuthorizeId;

    /**
     * @var string
     */
    protected $paymentMethodId;

    /**
     * @var string
     */
    protected $issuerId;
    /**
     * @var string
     */
    protected $paymentTypeId;

    /**
     * @var string
     */
    protected $token;

    /**
     * @var CardEntity
     */
    protected $card;

    /**
     * @var string
     */
    protected $statementDescriptor;

    /**
     * @var integer
     */
    protected $installments;

    /**
     * @var string
     */
    protected $notificationUrl;

    /**
     * @var array
     */
    protected $refunds;

    /**
     * @var AdditionalInfoEntity
     */
    protected $additionalInfo;

    /**
     * @var string
     */
    protected $sponsorId;

    /**
     * @var string
     */
    protected $authorizationCode;

    /**
     * @var string
     */
    protected $deductionSchema;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return PaymentEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param string $dateCreated
     * @return PaymentEntity
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateApproved()
    {
        return $this->dateApproved;
    }

    /**
     * @param string $dateApproved
     * @return PaymentEntity
     */
    public function setDateApproved($dateApproved)
    {
        $this->dateApproved = $dateApproved;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateLastUpdate()
    {
        return $this->dateLastUpdate;
    }

    /**
     * @param string $dateLastUpdate
     * @return PaymentEntity
     */
    public function setDateLastUpdate($dateLastUpdate)
    {
        $this->dateLastUpdate = $dateLastUpdate;
        return $this;
    }

    /**
     * @return string
     */
    public function getMoneyReleaseDate()
    {
        return $this->moneyReleaseDate;
    }

    /**
     * @param string $moneyReleaseDate
     * @return PaymentEntity
     */
    public function setMoneyReleaseDate($moneyReleaseDate)
    {
        $this->moneyReleaseDate = $moneyReleaseDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getCollectorId()
    {
        return $this->collectorId;
    }

    /**
     * @param int $collectorId
     * @return PaymentEntity
     */
    public function setCollectorId($collectorId)
    {
        $this->collectorId = $collectorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * @param string $operationType
     * @return PaymentEntity
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * @return PayerEntity
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @param PayerEntity $payer
     * @return PaymentEntity
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isBinaryMode()
    {
        return $this->binaryMode;
    }

    /**
     * @param boolean $binaryMode
     * @return PaymentEntity
     */
    public function setBinaryMode($binaryMode)
    {
        $this->binaryMode = $binaryMode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isLiveMode()
    {
        return $this->liveMode;
    }

    /**
     * @param boolean $liveMode
     * @return PaymentEntity
     */
    public function setLiveMode($liveMode)
    {
        $this->liveMode = $liveMode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     * @return PaymentEntity
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }

    /**
     * @param string $externalReference
     * @return PaymentEntity
     */
    public function setExternalReference($externalReference)
    {
        $this->externalReference = $externalReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return PaymentEntity
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param string $metadata
     * @return PaymentEntity
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * @param string $currencyId
     * @return PaymentEntity
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    /**
     * @return float
     */
    public function getTransactionAmount()
    {
        return $this->transactionAmount;
    }

    /**
     * @param float $transactionAmount
     * @return PaymentEntity
     */
    public function setTransactionAmount($transactionAmount)
    {
        $this->transactionAmount = $transactionAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTransactionAmountRefunded()
    {
        return $this->transactionAmountRefunded;
    }

    /**
     * @param float $transactionAmountRefunded
     * @return PaymentEntity
     */
    public function setTransactionAmountRefunded($transactionAmountRefunded)
    {
        $this->transactionAmountRefunded = $transactionAmountRefunded;
        return $this;
    }

    /**
     * @return float
     */
    public function getCouponAmount()
    {
        return $this->couponAmount;
    }

    /**
     * @param float $couponAmount
     * @return PaymentEntity
     */
    public function setCouponAmount($couponAmount)
    {
        $this->couponAmount = $couponAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return PaymentEntity
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCouponCode()
    {
        return $this->couponCode;
    }

    /**
     * @param string $couponCode
     * @return PaymentEntity
     */
    public function setCouponCode($couponCode)
    {
        $this->couponCode = $couponCode;
        return $this;
    }

    /**
     * @return TransactionDetailsEntity
     */
    public function getTransactionDetails()
    {
        return $this->transactionDetails;
    }

    /**
     * @param TransactionDetailsEntity $transactionDetails
     * @return PaymentEntity
     */
    public function setTransactionDetails(TransactionDetailsEntity $transactionDetails)
    {
        $this->transactionDetails = $transactionDetails;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeeDetails()
    {
        return $this->feeDetails;
    }

    /**
     * @param FeeDetailsEntity $feeDetails
     * @return PaymentEntity
     */
    public function setFeeDetails(FeeDetailsEntity $feeDetails)
    {
        $this->feeDetails[] = $feeDetails;
        return $this;
    }

    /**
     * @return int
     */
    public function getDifferentialPricingId()
    {
        return $this->differentialPricingId;
    }

    /**
     * @param int $differentialPricingId
     * @return PaymentEntity
     */
    public function setDifferentialPricingId($differentialPricingId)
    {
        $this->differentialPricingId = $differentialPricingId;
        return $this;
    }

    /**
     * @return float
     */
    public function getApplicationFee()
    {
        return $this->applicationFee;
    }

    /**
     * @param float $applicationFee
     * @return PaymentEntity
     */
    public function setApplicationFee($applicationFee)
    {
        $this->applicationFee = $applicationFee;
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
     * @return PaymentEntity
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->statusDetail;
    }

    /**
     * @param string $statusDetail
     * @return PaymentEntity
     */
    public function setStatusDetail($statusDetail)
    {
        $this->statusDetail = $statusDetail;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCapture()
    {
        return $this->capture;
    }

    /**
     * @param boolean $capture
     * @return PaymentEntity
     */
    public function setCapture($capture)
    {
        $this->capture = $capture;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCaptured()
    {
        return $this->captured;
    }

    /**
     * @param boolean $captured
     * @return PaymentEntity
     */
    public function setCaptured($captured)
    {
        $this->captured = $captured;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallForAuthorizeId()
    {
        return $this->callForAuthorizeId;
    }

    /**
     * @param string $callForAuthorizeId
     * @return PaymentEntity
     */
    public function setCallForAuthorizeId($callForAuthorizeId)
    {
        $this->callForAuthorizeId = $callForAuthorizeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @param string $paymentMethodId
     * @return PaymentEntity
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIssuerId()
    {
        return $this->issuerId;
    }

    /**
     * @param string $issuerId
     * @return PaymentEntity
     */
    public function setIssuerId($issuerId)
    {
        $this->issuerId = $issuerId;
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
     * @return PaymentEntity
     */
    public function setPaymentTypeId($paymentTypeId)
    {
        $this->paymentTypeId = $paymentTypeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return PaymentEntity
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param string $card
     * @return PaymentEntity
     */
    public function setCard($card)
    {
        $this->card = $card;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatementDescriptor()
    {
        return $this->statementDescriptor;
    }

    /**
     * @param string $statementDescriptor
     * @return PaymentEntity
     */
    public function setStatementDescriptor($statementDescriptor)
    {
        $this->statementDescriptor = $statementDescriptor;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * @param int $installments
     * @return PaymentEntity
     */
    public function setInstallments($installments)
    {
        $this->installments = $installments;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotificationUrl()
    {
        return $this->notificationUrl;
    }

    /**
     * @param string $notificationUrl
     * @return PaymentEntity
     */
    public function setNotificationUrl($notificationUrl)
    {
        $this->notificationUrl = $notificationUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    /**
     * @param string $refunds
     * @return PaymentEntity
     */
    public function setRefunds($refunds)
    {
        $this->refunds = $refunds;
        return $this;
    }

    /**
     * @return AdditionalInfoEntity
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @param AdditionalInfoEntity $additionalInfo
     * @return PaymentEntity
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getSponsorId()
    {
        return $this->sponsorId;
    }

    /**
     * @param string $sponsorId
     * @return PaymentEntity
     */
    public function setSponsorId($sponsorId)
    {
        $this->sponsorId = $sponsorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * @param string $authorizationCode
     * @return PaymentEntity
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getNetAmount()
    {
        return $this->netAmount;
    }

    /**
     * @param float $netAmount
     * @return PaymentEntity
     */
    public function setNetAmount($netAmount)
    {
        $this->netAmount = $netAmount;
        return $this;
    }

    /**
     * @return array
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * @param TaxesEntity $taxes
     * @return PaymentEntity
     */
    public function setTaxes(TaxesEntity $taxes)
    {
        $this->taxes[] = $taxes;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeductionSchema()
    {
        return $this->deductionSchema;
    }

    /**
     * @param string $deductionSchema
     * @return PaymentEntity
     */
    public function setDeductionSchema($deductionSchema)
    {
        $this->deductionSchema = $deductionSchema;
        return $this;
    }





}