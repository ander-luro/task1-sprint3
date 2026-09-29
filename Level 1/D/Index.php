<?php

require_once 'PaymentGatewayInterface.php';
require_once 'BankTransferGateway.php';
require_once 'PaypalPaymentGateway.php';
require_once 'StripePaymentGateway.php';
require_once 'PaymentProcessor.php';


$bankGateway = new BankTransferGateway();
$paypalGateway = new PayPalPaymentGateway();
$stripeGateway = new StripePaymentGateway();

$paymentProcessor = new PaymentProcessor();
echo $paymentProcessor->processPayment($bankGateway, 142.4).PHP_EOL;
echo $paymentProcessor->processPayment($paypalGateway, 32.8).PHP_EOL;
echo $paymentProcessor->processPayment($stripeGateway, 47.2).PHP_EOL;