<?php 

require_once 'PaymentGatewayInterface.php';

class StripePaymentGateway implements PaymentGatewayInterface
{
    public function pay(float $amount): string
    {
        return "{$amount} payment processed with Stripe";
    }
}