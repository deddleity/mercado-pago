<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 9/02/17
 * Time: 02:50 PM
 */

namespace MercadoPago\Entity\Transaction\PaymentMethods;


class FinancialInstitutionsEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $description;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return FinancialInstitutionsEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return FinancialInstitutionsEntity
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}