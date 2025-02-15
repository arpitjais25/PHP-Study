<?php
// Exeption Handling
    // yah ek Run time Error hoti hai jinhe Exception ka naam diya jata hai
    declare(strict_types=1);
    require_once __DIR__.'/ExeptionHandling.php';
    require_once __DIR__.'/Invoice.php';
    require_once __DIR__.'/Customer.php';
    require_once __DIR__.'/MissingBillingInfoExecption.php';

    $d = new ExceptionHandling(2,8);
    $invoice = new Invoice(new Customer(['foo'=>'bar']));
    try{
        // code that may throw an Exception
        $invoice->process(25);
    }//-catch(MissingBillingInfoExecption $e )/* $e is a object of \Exception Class ab aap PHP 8 me 
    // bina Object argument ($e) ke bhi call kar sakte hai */{
       //- echo "Something Wrong!(manualy Exception)"; 
    // and MissingBillingInfoExeption is extends \Exception class
    
        // code to handle the Exception
        // Ex.

        // echo $e->getMessage(). ' '.$e->getFile().' '.$e->getCode().' '.$e->getLine().PHP_EOL;
        // aap kuch apne hishsb se bhi bata sakte hai   
    // }
     // -->>aap kai sari Exception ko bhi catch kar sakte hai 
//    try ke baad kai sare Catch block ka use karke
// kabhi kabhi hota hai ki clear nahi hota hai ki kon si Execption aa sakti hai ya ek se jyada 
// bhi exception ho sakti hai en problems ke liye ham kai sare catch block ka use karsakte hai 
    //catch(\InvalidArgumentException){
        // echo "Invalid Argument Exception";
    // }//ek to es tarah ho sakta hai
    // ---catching Multiple Exeption---
    catch(\InvalidArgumentException | MissingBillingInfoExecption $exception ){
       echo $exception->getMessage();
    }//en dono Exceptin me se jo Excetin aaayegi chatch blocke me uska message throw hoga
    // aap inki jagah keval Exeption class ko bhi catch karenge to answer aisa hi aayega

    // ______________________________________________________________________________________
    // ------Finaly-----
    finally{
        // esme jo bhi code hoga vah jarur run hoga!
        echo PHP_EOL."finally block";
    }
?>