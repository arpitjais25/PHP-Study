<?php
declare(strict_types=1);
class CustomInvoiceException extends \Exception{
    public static function missingBillingInfo():static
    // eska matlab hai ki agar sub class ne es class ko inherit kar rakha hai to object usi class
        // /ka banega na ki is class ka
    {
        return new static/*subclass ka object agar sub class hai to class ka object */('Missing Billing Info');
        // eska matlab hai ki agar sub class ne es class ko inherit kar rakha hai to object usi class
        // /ka banega na ki is class ka
    }
    public static function invalidAmount():static{
        return new static('Invalid Amount!');
    }
}
?>