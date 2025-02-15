<?php
declare(strict_types=1);
class Invoice
{
    public function __construct(public AdvanceExceptionHandling\Customer $customer){} 

    public function process(float $amount): void {
        if ($amount <= 0){
            // throw new \Exception("Invalid invoice Amount");
            throw CustomInvoiceException::invalidAmount();
        }
        if (empty($this->customer->getBillingInfo())){
            throw CustomInvoiceException::missingBillingInfo();
        }
        echo 'Processing $'. $amount. ' INVOICE---';
        sleep(1);
        echo 'OK';
    }
}   


?>