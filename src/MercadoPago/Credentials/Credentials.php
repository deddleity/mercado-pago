<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 8/02/17
 * Time: 08:00 AM
 */

namespace MercadoPago\Credentials;


class Credentials
{

    /**
     * Singleton instance.
     * @var Credentials
     */
    protected static $instance = null;

    /**
     * @var string
     */
    protected $clientId;

    /**
     * @var string
     */
    protected $clientSecret;

    /**
     * @var string
     */
    protected $token;
    /**
     * @var string
     */
    protected $publicKey;
    /**
     * @var
     */
    protected $accessData;

    /**
     * @var boolean
     */
    protected $sandBox;

    /**
     * Gets a singleton instance of class.
     * @return Credentials
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     * @return Credentials
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * @param string $clientSecret
     * @return Credentials
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
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
     * @return Credentials
     */
    public function setToken($token)
    {
        $this->token = $token;
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
     * @return Credentials
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccessData()
    {
        return $this->accessData;
    }

    /**
     * @param mixed $accessData
     * @return Credentials
     */
    public function setAccessData($accessData)
    {
        $this->accessData = $accessData;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isSandBox()
    {
        return $this->sandBox;
    }

    /**
     * @param boolean $sandBox
     * @return Credentials
     */
    public function setSandBox($sandBox)
    {
        $this->sandBox = $sandBox;
        return $this;
    }


}