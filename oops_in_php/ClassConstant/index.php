<?php
var_dump(require_once __DIR__.'/Transaction.php');
use oops_in_php\ClassConstant\Transaction;
echo"<br>".Transaction::STATUS_PAID;
echo"<br>".Transaction::/*(scope resolution operator)*/STATUS_PANDING;
//MOP->
    //yah sub constructor chalne se pahile run hoga qki constructor tab chalta hai jab object ka instanc banta hai
    //abhi instance to bana nahi hai to ye pahile hi chalega 

//eshi tarah aap bina class ke instens ke use ke bhi auther class ke constant ko use kar sakte hai.
//-->Class constant ko access karne ke liye tumhe class ka naam aur scope resolution operator :: ka use
// karna padta hai.
//-> aap public constant ko nahi access ar sakte hai.

$transaction= new Transaction();
// same aap object se bhi call kar sakte hai 
//------> 
echo "<br/>".$transaction::STATUS_DICLINED;//same 
echo "<br/>".$transaction::class;///eski madat se aap class bhi pata kar sakte hai ki kis class ka hai obj.
echo "<br>".self::class; //error


