<?php
    require_once '../nullSafe operator/Transaction.php';
    require_once './Customer.php';
    require_once './PaymentProfile.php';
    $transaction= new Transaction(5, 'Test');

    $transaction ?->customer ?->paymentProfile->id;


    /*nall safe operator ka use vaha kiya jata hai jaha ham pahile se hi ye bata dete hai ki  es particular 
    class ka ye object banana chahte hai jo abhi humne banaya nahi hai  aur usme abhi ki liye null hai 

    to esi liye use call kar sakte hai nullSafe operator ki madat se.