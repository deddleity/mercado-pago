<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 7/02/17
 * Time: 02:24 PM
 */

namespace MercadoPago\Entity\Transaction\Operations;


class BackUrlsEntity
{
    /**
     * @var string
     */
    protected $success;
    /**
     * @var string
     */
    protected $pending;
    /**
     * @var string
     */
    protected $failure;

    /**
     * @return string
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param string $success
     * @return BackUrlsEntity
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return string
     */
    public function getPending()
    {
        return $this->pending;
    }

    /**
     * @param string $pending
     * @return BackUrlsEntity
     */
    public function setPending($pending)
    {
        $this->pending = $pending;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailure()
    {
        return $this->failure;
    }

    /**
     * @param string $failure
     * @return BackUrlsEntity
     */
    public function setFailure($failure)
    {
        $this->failure = $failure;
        return $this;
    }
}