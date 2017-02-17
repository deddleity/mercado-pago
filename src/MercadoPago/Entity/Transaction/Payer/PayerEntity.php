<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 11:33 AM
 */

namespace MercadoPago\Entity\Transaction\Payer;


class PayerEntity
{
    /**
     * @var integer
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     * customer | registered | guest
     */
    protected $type;
    /**
     * @var string
    
     */
    protected $surname;
    /**
     * @var string
    
     */
    protected $email;
    /**
     * @var string
    
     */
    protected $dateCreated;
    /**
     * @var PhoneEntity
     */
    protected $phone;
    /**
     * @var IdentificationEntity
     */
    protected $identification;
    /**
     * @var AddressEntity
     */
    protected $address;
    
    /**
     * @var string
     * individual or association
     */
    protected $entity_type;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return PayerEntity
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
     * @return PayerEntity
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
     * @return PayerEntity
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return PayerEntity
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return PayerEntity
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
     * @return PayerEntity
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return PhoneEntity
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param PhoneEntity $phone
     * @return PayerEntity
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return IdentificationEntity
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * @param IdentificationEntity $identification
     * @return PayerEntity
     */
    public function setIdentification($identification)
    {
        $this->identification = $identification;
        return $this;
    }

    /**
     * @return AddressEntity
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param AddressEntity $address
     * @return PayerEntity
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * @param string $entity_type
     * @return PayerEntity
     */
    public function setEntityType($entity_type)
    {
        $this->entity_type = $entity_type;
        return $this;
    }

   
    
}