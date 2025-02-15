<?php
declare(strict_types=1);
class Invoice
{
    public function __construct(public Customer $customer){} 

    public function process(float $amount): void {
        if ($amount <= 0){
            // throw new \Exception("Invalid invoice Amount");
            throw new \InvalidArgumentException("Invalid invoice Amount");
        }
        if (empty($this->customer->getBillingInfo())){
            // throw new \InvalidArgumentException('Missing Billing Information');
            throw new MissingBillingInfoExecption();
        }
        echo 'Processing $'. $amount. ' INVOICE---';
        sleep(1);
        echo 'OK';
    }
}   


?>