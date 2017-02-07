<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 12:17 PM
 */

namespace MercadoPago\Entity\Transaction\PaymentMethods;


class CardEntity
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $lastFourDigits;
    /**
     * @var string
     */
    protected $firstSixDigits;
    /**
     * @var integer
     */
    protected $expirationYear;
    /**
     * @var string
     */
    protected $expirationMonth;
    /**
     * @var string
     */
    protected $dateCreated;
    /**
     * @var string
     */
    protected $dateLastUpdated;
    /**
     * @var CardHolderEntity
     */
    protected $cardholder;
    /**
     * @var string
     */
    protected $publicKey;
    /**
     * @var string
     */
    protected $cardId;
    /**
     * @var bool
     */
    protected $luhnValidation;
    /**
     * @var string
     */
    protected $dateUsed;
    /**
     * @var string
     * @JMS\Type("string")
     */
    protected $status;
    /**
     * @var string
     */
    protected $dateDue;
    /**
     * @var string
     */
    protected $liveMode;
    /**
     * @var string
     */
    protected $cardNumberLength;
    /**
     * @var string
     */
    protected $securityCodeLength;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return CardEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastFourDigits()
    {
        return $this->lastFourDigits;
    }

    /**
     * @param string $lastFourDigits
     * @return CardEntity
     */
    public function setLastFourDigits($lastFourDigits)
    {
        $this->lastFourDigits = $lastFourDigits;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstSixDigits()
    {
        return $this->firstSixDigits;
    }

    /**
     * @param string $firstSixDigits
     * @return CardEntity
     */
    public function setFirstSixDigits($firstSixDigits)
    {
        $this->firstSixDigits = $firstSixDigits;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationYear()
    {
        return $this->expirationYear;
    }

    /**
     * @param int $expirationYear
     * @return CardEntity
     */
    public function setExpirationYear($expirationYear)
    {
        $this->expirationYear = $expirationYear;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationMonth()
    {
        return $this->expirationMonth;
    }

    /**
     * @param int $expirationMonth
     * @return CardEntity
     */
    public function setExpirationMonth($expirationMonth)
    {
        $this->expirationMonth = $expirationMonth;
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
     * @return CardEntity
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateLastUpdated()
    {
        return $this->dateLastUpdated;
    }

    /**
     * @param string $dateLastUpdated
     * @return CardEntity
     */
    public function setDateLastUpdated($dateLastUpdated)
    {
        $this->dateLastUpdated = $dateLastUpdated;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardholder()
    {
        return $this->cardholder;
    }

    /**
     * @param string $cardholder
     * @return CardEntity
     */
    public function setCardholder($cardholder)
    {
        $this->cardholder = $cardholder;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * @param string $publicKey
     * @return CardEntity
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * @param string $cardId
     * @return CardEntity
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLuhnValidation()
    {
        return $this->luhnValidation;
    }

    /**
     * @param string $luhnValidation
     * @return CardEntity
     */
    public function setLuhnValidation($luhnValidation)
    {
        $this->luhnValidation = $luhnValidation;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateUsed()
    {
        return $this->dateUsed;
    }

    /**
     * @param string $dateUsed
     * @return CardEntity
     */
    public function setDateUsed($dateUsed)
    {
        $this->dateUsed = $dateUsed;
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
     * @return CardEntity
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateDue()
    {
        return $this->dateDue;
    }

    /**
     * @param string $dateDue
     * @return CardEntity
     */
    public function setDateDue($dateDue)
    {
        $this->dateDue = $dateDue;
        return $this;
    }

    /**
     * @return string
     */
    public function getLiveMode()
    {
        return $this->liveMode;
    }

    /**
     * @param string $liveMode
     * @return CardEntity
     */
    public function setLiveMode($liveMode)
    {
        $this->liveMode = $liveMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumberLength()
    {
        return $this->cardNumberLength;
    }

    /**
     * @param string $cardNumberLength
     * @return CardEntity
     */
    public function setCardNumberLength($cardNumberLength)
    {
        $this->cardNumberLength = $cardNumberLength;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecurityCodeLength()
    {
        return $this->securityCodeLength;
    }

    /**
     * @param string $securityCodeLength
     * @return CardEntity
     */
    public function setSecurityCodeLength($securityCodeLength)
    {
        $this->securityCodeLength = $securityCodeLength;
        return $this;
    }
}