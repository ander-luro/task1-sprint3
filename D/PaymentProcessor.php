<?php

require_once 'PaymentGatewayInterface.php';

class PaymentProcessor
{
    public function processPayment(PaymentGatewayInterface $gateway, float $cantidad): string
    {
        return $gateway->pay($cantidad);
    }
}