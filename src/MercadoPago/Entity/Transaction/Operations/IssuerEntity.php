<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 12:38 PM
 */

namespace MercadoPago\Entity\Transaction\Operations;


class IssuerEntity
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var boolean
      */
    protected $isDefault;

    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $secureThumbnail;
    /**
     * @var string
     */
    protected $thumbnail;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return IssuerEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @param boolean $isDefault
     * @return IssuerEntity
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
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
     * @return IssuerEntity
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecureThumbnail()
    {
        return $this->secureThumbnail;
    }

    /**
     * @param string $secureThumbnail
     * @return IssuerEntity
     */
    public function setSecureThumbnail($secureThumbnail)
    {
        $this->secureThumbnail = $secureThumbnail;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     * @return IssuerEntity
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }
}