<?php

require_once 'PaymentGatewayInterface.php';

class PayPalPaymentGateway implements PaymentGatewayInterface
{
    public function pay(float $amount): string
    {
        return "{$amount} payment processed by Paypal";
    }
}