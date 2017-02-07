<?php

namespace MercadoPago\Entity;
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 11:14 AM
 */
abstract class EntityAbstract implements EntityInterface
{
    /**
     * Returns if object is empty
     * @return bool
     */
    public function isEmpty()
    {
        foreach (get_object_vars($this) as $property) {
            if ($property !== null and $property !== false and $property !== '') {
                return false;
            }
        }
        return true;
    }
}