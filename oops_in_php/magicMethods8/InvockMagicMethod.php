<?php
declare(strict_types=1);
namespace For_using_Invoke_Magic_Method;
class InvockMagicMethod{
    //yah tab trigger hota hai jab kabhi ham object ko directly call kar dete hai jaise- InvokMagicMethod();
    //agar ham __invoke ka use nahi karte hai directoly object ko call karne par Fatel Error AA jaygi
    public function __invoke(){
        // yah kishi object ko callable bana deta hai jisse ki use bhi call kiya ja sakta hai.
        echo PHP_EOL;
        echo "Envoked";
    }
}
?>