<?php

interface PaymentGatewayInterface {
    public function pay(float $amount) : string;
}
