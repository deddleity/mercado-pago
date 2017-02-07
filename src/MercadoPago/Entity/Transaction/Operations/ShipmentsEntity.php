<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 03:45 PM
 */

namespace MercadoPago\Entity\Transaction\Operations;


class ShipmentsEntity
{
    /**
     * @var string
     */
    protected $mode;
    /**
     * @var boolean
     */    
    protected $local_pickup;
    /**
     * @var string
     */
    protected $dimensions;
    /**
     * @var integer
     */
    protected $default_shipping_method;

    /**
     * @var FreeMethodsEntity
     */
    protected $free_methods;

    /**
     * @var float
     */
    protected $cost;
    /**
     * @var boolean
     */
    protected $free_shipping;
    
    
    /**
     * @var ReceiverAddressEntity
    */
    protected $receiverAddress;

    /**
     * @return ReceiverAddressEntity
     */
    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

    /**
     * @param $receiverAddress
     * @return ShipmentsEntity
     */
    public function setReceiverAddress($receiverAddress)
    {
        $this->receiverAddress = $receiverAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     * @return ShipmentsEntity
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isLocalPickup()
    {
        return $this->local_pickup;
    }

    /**
     * @param boolean $local_pickup
     * @return ShipmentsEntity
     */
    public function setLocalPickup($local_pickup)
    {
        $this->local_pickup = $local_pickup;
        return $this;
    }

    /**
     * @return string
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @param string $dimensions
     * @return ShipmentsEntity
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultShippingMethod()
    {
        return $this->default_shipping_method;
    }

    /**
     * @param int $default_shipping_method
     * @return ShipmentsEntity
     */
    public function setDefaultShippingMethod($default_shipping_method)
    {
        $this->default_shipping_method = $default_shipping_method;
        return $this;
    }

    /**
     * @return FreeMethodsEntity
     */
    public function getFreeMethods()
    {
        return $this->free_methods;
    }

    /**
     * @param FreeMethodsEntity $free_methods
     * @return ShipmentsEntity
     */
    public function setFreeMethods($free_methods)
    {
        $this->free_methods = $free_methods;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return ShipmentsEntity
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isFreeShipping()
    {
        return $this->free_shipping;
    }

    /**
     * @param boolean $free_shipping
     * @return ShipmentsEntity
     */
    public function setFreeShipping($free_shipping)
    {
        $this->free_shipping = $free_shipping;
        return $this;
    }
    
    
}