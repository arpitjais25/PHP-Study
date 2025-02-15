<?php
declare(strict_types=1);
namespace Arpit;
const NameSpaceConst='NameSpace Constant';
function foo(){
    echo "NameSpace function";
}
// class Transaction{

// }

// MIP: Yahan Arpit ek namespace hai jo class Transaction ko encapsulate karta hai.
//-------------------------------------------------------------

/* ***vaise to yaha maine Arpit name space use kiya hai parantu aap ek acchi readablity ke liye apna 
path kikhiyega  accha rahega 
Example :
*/
            // var_dump(new NameSpace\Transaction());

//-------------------------------------------------
/* Example 1:
 class Transaction{
     public function __construct(){
         var_dump(new DateTime());// yaha per DateTime class ka koi function bhi ho sakta hai
    }
}
 //have Error

/* 
    Example 1.1:
 class Transaction{
public function __construct(){
    var_dump(new \DateTime());// ab yaha per hoga kya ki php DateTime() ki globle me search karega
    // local ki jagah.
   }
}*/// its workes
//-------------------------------------------------------


