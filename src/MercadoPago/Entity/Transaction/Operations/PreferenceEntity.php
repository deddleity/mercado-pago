<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 02:22 PM
 */

namespace MercadoPago\Entity\Transaction\Operations;


use MercadoPago\Entity\Transaction\Payer\PayerEntity;
use MercadoPago\Entity\Transaction\PaymentMethods\PaymentMethodListEntity;


class PreferenceEntity
{
    /**
     * @var integer
    */
    protected $collectorId;
    /**
     * @var string
     * regular_payment money_transfer
    */
    protected $operationType;
    /**
     * @var array
     */
    protected $items;
    /**
     * @var PayerEntity
      */
    protected $payer;
    /**
     * @var BackUrlsEntity
     */
    protected $backUrls;
    /**
     * @var string
     * all | approved
      */
    protected $autoReturn;
    /**
     * @var PaymentMethodListEntity
     */
    protected $paymentMethods;
    /**
     * @var integer
     */
    protected $clientId;
    /**
     * @var string
     */
    protected $marketplace;
    /**
     * @var float
     */
    protected $marketPlaceFee;
    /**
     * @var ShipmentsEntity
     */
    protected $shipments;
    /**
     * @var string
     */
    protected $notificacionUrl;
    /**
     * @var string
     */
    protected $externalReference;
    /**
     * @var string
     */
    protected $additionalInfo;
    /**
     * @var bool
     */
    protected $expires;
    /**
     * @var string
    */
    protected $expirationDateFrom;
    /**
     * @var string
     */
    protected $expirationDateTo;
    /**
     * @var string
    */
    protected $dateCreated;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
    */
    protected $initPoint;
    /**
     * @var string
   */
    protected $sandboxInitPoint;

    /**
     * @return int
     */
    public function getCollectorId()
    {
        return $this->collectorId;
    }

    /**
     * @param int $collectorId
     * @return PreferenceEntity
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
     * @return PreferenceEntity
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return PreferenceEntity
     */
    public function setItems($items)
    {
        $this->items = $items;
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
     * @return PreferenceEntity
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * @return BackUrlsEntity
     */
    public function getBackUrls()
    {
        return $this->backUrls;
    }

    /**
     * @param BackUrlsEntity $backUrls
     * @return PreferenceEntity
     */
    public function setBackUrls($backUrls)
    {
        $this->backUrls = $backUrls;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutoReturn()
    {
        return $this->autoReturn;
    }

    /**
     * @param string $autoReturn
     * @return PreferenceEntity
     */
    public function setAutoReturn($autoReturn)
    {
        $this->autoReturn = $autoReturn;
        return $this;
    }

    /**
     * @return PaymentMethodListEntity
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * @param PaymentMethodListEntity $paymentMethods
     * @return PreferenceEntity
     */
    public function setPaymentMethods($paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }

    /**
     * @return integer
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param  $clientId
     * @return PreferenceEntity
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMarketplace()
    {
        return $this->marketplace;
    }

    /**
     * @param string $marketplace
     * @return PreferenceEntity
     */
    public function setMarketplace($marketplace)
    {
        $this->marketplace = $marketplace;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarketPlaceFee()
    {
        return $this->marketPlaceFee;
    }

    /**
     * @param float $marketPlaceFee
     * @return PreferenceEntity
     */
    public function setMarketPlaceFee($marketPlaceFee)
    {
        $this->marketPlaceFee = $marketPlaceFee;
        return $this;
    }

    /**
     * @return ShipmentsEntity
     */
    public function getShipments()
    {
        return $this->shipments;
    }

    /**
     * @param ShipmentsEntity $shipments
     * @return PreferenceEntity
     */
    public function setShipments($shipments)
    {
        $this->shipments = $shipments;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotificacionUrl()
    {
        return $this->notificacionUrl;
    }

    /**
     * @param string $notificacionUrl
     * @return PreferenceEntity
     */
    public function setNotificacionUrl($notificacionUrl)
    {
        $this->notificacionUrl = $notificacionUrl;
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
     * @return PreferenceEntity
     */
    public function setExternalReference($externalReference)
    {
        $this->externalReference = $externalReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @param string $additionalInfo
     * @return PreferenceEntity
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isExpires()
    {
        return $this->expires;
    }

    /**
     * @param boolean $expires
     * @return PreferenceEntity
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDateFrom()
    {
        return $this->expirationDateFrom;
    }

    /**
     * @param string $expirationDateFrom
     * @return PreferenceEntity
     */
    public function setExpirationDateFrom($expirationDateFrom)
    {
        $this->expirationDateFrom = $expirationDateFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDateTo()
    {
        return $this->expirationDateTo;
    }

    /**
     * @param string $expirationDateTo
     * @return PreferenceEntity
     */
    public function setExpirationDateTo($expirationDateTo)
    {
        $this->expirationDateTo = $expirationDateTo;
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
     * @return PreferenceEntity
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return PreferenceEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getInitPoint()
    {
        return $this->initPoint;
    }

    /**
     * @param string $initPoint
     * @return PreferenceEntity
     */
    public function setInitPoint($initPoint)
    {
        $this->initPoint = $initPoint;
        return $this;
    }

    /**
     * @return string
     */
    public function getSandboxInitPoint()
    {
        return $this->sandboxInitPoint;
    }

    /**
     * @param string $sandboxInitPoint
     * @return PreferenceEntity
     */
    public function setSandboxInitPoint($sandboxInitPoint)
    {
        $this->sandboxInitPoint = $sandboxInitPoint;
        return $this;
    }
}