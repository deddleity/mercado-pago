<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 10/02/17
 * Time: 03:28 PM
 */

namespace MercadoPago\Entity\Transaction\PaymentMethods;


use MercadoPago\Entity\Transaction\Operations\ShipmentsEntity;
use MercadoPago\Entity\Transaction\Order\ItemEntity;
use MercadoPago\Entity\Transaction\Payer\PayerEntity;

class AdditionalInfoEntity
{
    /**
     * @var string
     */
    protected $ipAddress;
    /**
     * @var array
     */
    protected $items;

    /**
     * @var PayerEntity
     */
    protected $payer;
    /**
     * @var ShipmentsEntity
     */
    protected $shipments;

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     * @return AdditionalInfoEntity
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
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
     * @param ItemEntity $items
     * @return AdditionalInfoEntity
     */
    public function setItems(ItemEntity $items)
    {
        $this->items[] = $items;
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
     * @return AdditionalInfoEntity
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;
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
     * @return AdditionalInfoEntity
     */
    public function setShipments($shipments)
    {
        $this->shipments = $shipments;
        return $this;
    }


}