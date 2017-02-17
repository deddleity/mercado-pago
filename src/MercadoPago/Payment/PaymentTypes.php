<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 10/02/17
 * Time: 11:50 AM
 */

namespace MercadoPago\Payment;


class PaymentTypes
{
    const AUTHORIZATION_AND_CAPTURE = 'AUTHORIZATION_AND_CAPTURE';
    const AUTHORIZATION             = 'AUTHORIZATION';
    const CAPTURE                   = 'CAPTURE';
    const REFUND                    = 'REFUND';
    const VOID                      = 'VOID';
}