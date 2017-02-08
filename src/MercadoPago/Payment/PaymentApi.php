<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 8/02/17
 * Time: 08:20 AM
 */

namespace MercadoPago\Payment;


use MercadoPago\Credentials\Credentials;

class PaymentApi
{
    //hmmmmm sdk?

    protected $credentials;

    protected $access_token;

    protected $mercadoPagoConnection;

    public function __construct(Credentials $credentials)
    {
        $this->credentials = $credentials;

        $this->connection = new \MP($this->credentials->getToken());

        $this->getAccessToken();

    }

    private function getAccessToken(){

        $this->access_token = $this->connection->get_access_token();

        return true;
    }


    public function getIdentificationTypes(){

        $request = array(
            "uri" => "/identification_types",
            "params" => array(
                "access_token" => $this->access_token
            )
        );

        $identificationTypes = \MPRestClient::get($request);

        var_dump($identificationTypes);
        
        return $identificationTypes;

    }
}