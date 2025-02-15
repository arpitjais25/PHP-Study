<?php
declare(strict_types=1);
class MissingBillingInfoExecption extends \Exception{
    protected $message = 'Missing Billing Information';
    // yaha per jo Exception class ka $message member hai uski Overloding ki gayi hai
}
?>