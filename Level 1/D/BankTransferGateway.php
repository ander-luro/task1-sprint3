<?php 

require_once 'PaymentGatewayInterface.php';

class BankTransferGateway implements PaymentGatewayInterface
{
    public function pay(float $amount): string
    {
        return "{$amount} bank transfer done";
    }
}