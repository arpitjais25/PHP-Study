<?php 

class Customer{
    public ?Customer $paymentProfile=null;
    public function __construct(private array $billingInfo= []){

    }
    public function getBillingInfo():array{
        return $this->billingInfo;
    }
}