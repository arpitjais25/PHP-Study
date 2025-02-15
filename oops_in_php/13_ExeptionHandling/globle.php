<?php
// Exeption Handling
    // yah ek Run time Error hoti hai jinhe Exception ka naam diya jata hai
    // declare(strict_types=1);
    require_once __DIR__.'/ExeptionHandling.php';
    require_once __DIR__.'/Invoice.php';
    require_once __DIR__.'/Customer.php';
    require_once __DIR__.'/MissingBillingInfoExecption.php';


    set_error_handler(function(\Throwable/*yaha \Exception ki jagahe \Throable Interface se Casting ki gayi hai */ $e):void{
        // qki Exception class me valueError(koi bhi Error class) class nahi hai Throable Interface me sare Error aur Exeptions hai
        var_dump($e->getMessage());
    });
    // try{
    //     echo array_rand([],1);
    // }catch(\Throwable $a ){
    //     $e->getMessage();
    // }
    // ---MOP---> ye sara code ko na likhne ke liy ham set_error_handler()ka use karte hai aur ham 
    //            error ko bhi catch kar sakte hai
    echo array_rand([],1);//ye automatic error detetect karke jo bhi hamne anynomus
    // function me likha hai uske hishab se message dega
?>