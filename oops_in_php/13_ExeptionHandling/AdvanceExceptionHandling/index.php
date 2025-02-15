<?php
// this is the best way to use Exception Handling In over Project qki ek hi file me ek type ke sare 
//  Exeption rakh sajte hai aur yah safe bhi hai
declare(strict_types=1);
require_once __DIR__.'/CustomeInvoiceException.php';
require_once __DIR__.'/Invoice.php';
require_once __DIR__.'/Customer.php';
use AdvanceExceptionHandling\Customer;
    $invoice = new Invoice(new Customer());
    $invoice-> process(-25);
?>