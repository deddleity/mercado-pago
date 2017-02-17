<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 8/02/17
 * Time: 08:20 AM
 */

namespace MercadoPago\Payment;


use Clickbus\DataTransfer\ExternalTransfer;
use MercadoPago\Credentials\Credentials;
use MercadoPago\Entity\Transaction\Order\ItemEntity;
use MercadoPago\Entity\Transaction\Order\TaxesEntity;
use MercadoPago\Entity\Transaction\Payer\IdentificationTypesEntity;
use MercadoPago\Entity\Transaction\PaymentEntity;
use MercadoPago\Entity\Transaction\PaymentMethods\CardEntity;
use MercadoPago\Entity\Transaction\PaymentMethods\PaymentMethodEntity;

class PaymentApi
{

    protected $credentials;

    protected $access_token;

    protected $mercadoPagoConnection;

    protected $getRawResponses;

    public function __construct(Credentials $credentials)
    {
        $this->credentials = $credentials;

        $this->connection = new \MP($this->credentials->getToken());

        $this->getAccessToken();



    }

    private function getAccessToken()
    {

        $this->access_token = $this->connection->get_access_token();

        return true;
    }

    /**
     * @return array
     */
    public function getIdentificationTypes()
    {

        $request = array(
            "uri" => "/v1/identification_types",
            "params" => array(
                "access_token" => $this->access_token
            )
        );

        $identificationTypes = \MPRestClient::get($request);

        // make validations
        $identificationTypes['status'];
        // and throw errors
        // spl object?
        
        $documentTypes = array();
   
        foreach ($identificationTypes['response'] as $iT) {
            
            $transfer = new ExternalTransfer();
            $identificationTypesTransfer =  $transfer->getTransfer(new IdentificationTypesEntity(), $iT);
            $documentTypes[] = $identificationTypesTransfer;
        }

        return $documentTypes;

    }

    public function getPaymentMethods()
    {

        $request = array(
            "uri" => "/v1/payment_methods",
            "params" => array(
                "access_token" => $this->access_token
            )
        );

        $paymentMethods = \MPRestClient::get($request);

        // make validations
        $paymentMethods['status'];
        // and throw errors
        // spl object?

        $documentTypes = array();

        foreach ($paymentMethods['response'] as $iT) {

            $transfer = new ExternalTransfer();
            $paymentTypesTransfer =  $transfer->getTransfer(new PaymentMethodEntity(), $iT);
            $documentTypes[] = $paymentTypesTransfer;
        }

        return $documentTypes;

    }

    public function getCardToken()
    {

    }
    public function setCardToken(CardEntity $card)
    {
        $request = array(
            "uri" => "/v1/card_tokens",
            "params" => array(
                "access_token" => $this->access_token
            ),
            "data" => array(
                'card_number' => $card->getCardNumber(),
                'expiration_month' => $card->getExpirationMonth(),
                'expiration_year' => $card->getExpirationYear(),
                'security_code' => $card->getSecurityCode(),
                'cardholder' => [
                    'name' => $card->getCardholder()->getName(),
                    'identification' => [
                        'number' => $card->getCardholder()->getIdentification()->getNumber(),
                        'type' => $card->getCardholder()->getIdentification()->getType()
                    ]
                ]
            )
        );

        $cardToken = \MPRestClient::post($request);

        // make validations
        $cardToken['status'];
        // and throw errors
        // spl object?

        $transfer = new ExternalTransfer();

        /** @TODO review this function */
        $cardTokenTransfer =  $transfer->getTransfer(new CardEntity(), $cardToken['response']);


        return $cardTokenTransfer;


    }
    public function updateCardToken()
    {

    }
    
    public function authorizeAndCapture(PaymentEntity $transaction)
    {

        $payer = [
            "email" => $transaction->getPayer()->getEmail(),
            "entity_type" => $transaction->getPayer()->getEntityType(),
            "type" => $transaction->getPayer()->getType(),
            "identification" => [
                "type" => $transaction->getPayer()->getIdentification()->getType(),
                "number" => $transaction->getPayer()->getIdentification()->getNumber(),
            ]
        ];
        $payerAI = [
            "email" => $transaction->getPayer()->getEmail(),
            "entity_type" => $transaction->getPayer()->getEntityType(),
            "type" => $transaction->getPayer()->getType(),
            "identification" => [
                "type" => $transaction->getPayer()->getIdentification()->getType(),
                "number" => $transaction->getPayer()->getIdentification()->getNumber(),
            ],
            "phone" => [
                "number" => $transaction->getPayer()->getPhone()->getNumber()
            ],
            "first_name" => $transaction->getPayer()->getName()
        ];

        $taxes = array("type" => "IVA", "value" => 0);

        $tax = array($taxes);

        $items =[];

        /** @var ItemEntity $it */
        foreach ($transaction->getAdditionalInfo()->getItems() as $it)
        {
            $item =
                [
                    "id" => $it->getId(),
                    "title" => $it->getTitle(),
                    "description" => $it->getDescription(),
                    "quantity" => $it->getQuantity(),
                    "picture_url" => $it->getPictureUrl(),
                    "unit_price" => $it->getUnitPrice()
                ];

            $items[] = $item;
        }
        
        $request = [
            "uri" => "/v1/payments",
            "params" => array(
                "access_token" => $this->access_token
            ),
            "data" => [
                "token" => $transaction->getToken(),
                "transaction_amount" => $transaction->getTransactionAmount(),
                "net_amount" => $transaction->getTransactionAmount(),
                "taxes" => $tax,
                "payment_method_id" => $transaction->getPaymentMethodId(),
                "description" => $transaction->getDescription(),
                "statement_descriptor" => $transaction->getStatementDescriptor(),
                "installments" => $transaction->getInstallments(),
                "payer" => $payer,
                "metadata" => $transaction->getMetadata()
            ],
            "additional_info" => [
               "payer" => $payerAI,
               "items" => $items
            ]
        ];


        $payment = $this->connection->post($request);

        return $payment;

    }

}