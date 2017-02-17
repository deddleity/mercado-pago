<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 8/02/17
 * Time: 08:47 AM
 */

namespace MercadoPago\Entity\Transaction\Payer;

class IdentificationTypesEntity 
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
    protected $type;
    /**
     * @var integer
     */
    protected $min_length;
    /**
     * @var integer
     */
    protected $max_length;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return IdentificationTypesEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
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
     * @return IdentificationTypesEntity
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return IdentificationTypesEntity
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinLength()
    {
        return $this->min_length;
    }

    /**
     * @param int $min_length
     * @return IdentificationTypesEntity
     */
    public function setMinLength($min_length)
    {
        $this->min_length = $min_length;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxLength()
    {
        return $this->max_length;
    }

    /**
     * @param int $max_length
     * @return IdentificationTypesEntity
     */
    public function setMaxLength($max_length)
    {
        $this->max_length = $max_length;
        return $this;
    }


}