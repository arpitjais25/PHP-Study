<?php
    require_once './Transaction.php';
    // $transaction= new Transaction(15,'transection discription');
    // var_dump($transaction);
    // var_dump($transaction->amount); //isme java ki tarah . ke jagahe per -> ka use karte hai kishi object 
    // ke member ko call karne ke liye.
    // echo "</br>";
    // var_dump($transaction->discription);
    // it have an Error  becouse the $discription is
    // private(private access spacifire ka use kiye gaya hai isliye ) private hone ke karan ese keval ushi 
    // file me use kiya ja sakta ha jisme ye banaya gya hai.
    //---- AB AAP OBJ KI MADAT SE KUCH BHI CHANGES KAR SAKTE HI PUBLIC MEMBER KE SAATH---
  
    // var_dump($transaction->amount=15);//updating amount member value 15.
    // echo "</br>";
    // $transaction->addTax(8);
    // echo "</br>";
    /*var_dump($transaction->amount);*/  //chuki amount private hai to esko access nahi kiya ja
    // sakta uske liye
    // hame ek getter function banana hoga jo ushi class me ho aur amount ki value return kare;  
    // var_dump($transaction->getAmount());

    // aap php me kuch alag tarah se bhi method ko call kiya ja sakta hai.

    // $transaction= new Transaction(15,'transection discription');

    //first type is
    
    // $transaction->addTax(8) ->transection->getAmount();//es prakar ek sath bhi call kar sakte hai.
    // ---------------------------------------------------------------------------------------------
    //second type is

    /*$transaction = (new Transaction(15,'Transaction 1'))->addTax(8)->getAmount();
    var_dump($transaction);*/
    /*------------------------------------------------------------------------------*/


    //____aap object ko kisi variable me bhi save kara krke bhi call kar sakte hai jaise function me kiya
    // jaya tha variable function me.

    //Example: 
        //$class= 'Transaction';   
        //$transaction1=( new $class(50,'Transaction 1'))->addTax(8)->getAmount();
        //hame pata hai ki class ek blueprint hota hi kishi object ka matlab hum ek saath kishi class ke
        // kai sare object bana sakte hai.
        //$transaction2=( new $class(100,'Transaction 1'))->addTax(45)->getAmount();
        //var_dump($transaction1 ,$transaction2);


    //destructr
    //Example:
        // $transaction= new Transaction(100, 'Transaction 1');
        // $transaction->addTax(66)->getAmount();
        //yaha per pahile destructor call hoga qki $transaction(obj) ke sare function call ho chuke hai.
        // var_dump($transaction);
        // echo "<br>";



        $transaction= new Transaction(100, 'Transaction 1');
        $transaction->addTax(66);
        //yaha per pahile destructor call nahi  hoga qki $transaction(obj) ke sare function call nahi
        // ho chuke hai.
        var_dump($transaction->getAmount());


