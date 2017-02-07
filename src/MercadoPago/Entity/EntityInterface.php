<?php

namespace MercadoPago\Entity;
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 11:14 AM
 */
interface EntityInterface
{
    /**
     * Returns if object is empty
     * @return bool
     */
    public function isEmpty();

    /**
     * Generate array order.
     * @return array
     */
    public function toArray();
}