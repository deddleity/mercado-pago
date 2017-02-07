<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 03:46 PM
 */

namespace MercadoPago\Entity\Transaction\Operations;


class DifferentialPricesEntity
{
    /**
     * @var integer
     */
   protected $id;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     * @return DifferentialPricesEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }



}