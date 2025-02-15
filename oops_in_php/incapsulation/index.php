<?php
require_once __DIR__.'/Transaction.php';
use oops_in_php\incpsulation\Transaction;
$transaction= new Transaction(56);
$transaction->process();
//$transaction->amount;//given error becouse the amount is private we solve that to using most importent
//property is (reflection property)  

$reflectionProperty= new ReflectionProperty(Transaction::class, 'amount');
//creating obj of reflectionProperty and passing to argunment class and private property
$reflectionProperty->setAccessible(true);
//setAccessible true ka matlab hai ki aap abh private property ko bhi access kar sakte hai.
echo"<br>".$reflectionProperty->getValue($transaction);
//accessing amount value balki amount private member hai.

//ab aap private member ko change bhi kar skte hai
$reflectionProperty->setValue($transaction, 125);
//set value 125 in private member $amount
echo"<br>".$reflectionProperty->getValue($transaction);