<?php

require_once '../class1/Transaction.php';
require_once '../NameSpace/Transaction.php';
require_once '../NameSpace/DateTime.php';


// namespace ko lagane ke 2 tarike hai 
// first way is:  

// var_dump(new Transaction()); //have error!
// var_dump(new Arpit\Transaction()); //have not error!

/* ***vaise to yaha maine Arpit name space use kiya hai parantu aap ek acchi readablity ke liye apna 
path kikhiyega  accha rahega 
Example :*/
           // var_dump(new NameSpace\Transaction());

//---------------------------------------------------------
//Second way: 

// Using use kye word:

// use Arpit\Transaction;
// var_dump( new Transaction());
//--------------------------------------------------
//use with FUNCTION
// vaise hi aap 'use' ke sath function bhi use kar sakte hai
use function Arpit\DateTime ;
//use function Arpit\foo as jaiswal; (mip): aap is tarah kishi lambe path ko chota karke us
// ke jagah per use kar sakte hai
use function Arpit\foo;
foo();
//-----------------------
//use with const

use const Arpit\NameSpaceConst;
//echo"<br> ".NameSpaceConst;
//--------------------------------------------------------------------------------------


/*                NAMESPACE
-----------------------------------------------
    Namespace ka use PHP mein tab hota hai jab hum code ko organize karna chahte hain, especially 
    jab hum same naam ke classes, functions, ya variables ko alag-alag rakhna chahte hain bina kisi conflict ke.
     Yeh ek tarika hai taaki hum apne code ko modular aur maintainable bana sakein.

Kya hota hai Namespace?
-------------------------
    Namespace ek logical grouping hoti hai code blocks ki, jaise classes, functions, aur constants.
     PHP mein jab hum large projects banate hain, toh alag-alag modules ya libraries mein same naam ke 
     classes ya functions ho sakte hain. Is problem ko solve karne ke liye namespaces ka use hota hai.

    *point:-
        yah problam keval class me hi nahi constant our functoin me bhi hota hai. vaha bhi same aise 
        use kiya jata hai. 
---------------------------------------------------------------------------------------------------------------

    MIP:: lekin isme ek problem hai agar maan lijiye aap ek aur class banate hai man lijiye jiska naam hai 
    Costomer aur aap Transection class ke constructor ya uske kishi function ki madad se aap Costamer class
    ka instens(object)  banat hai to aap index file me bina Costomer file ko include kiye use nah kar sakate
    hai;
    -------------------------------------------------------------------------------------------------------
    )MOP(kiyuki jab aap kishi me name space  dete hai  to keval uske function ko hi use kar sakte hai vaha 
    baki sare function aur methods  ko access nahi dega ya aise kah lijiye ki GLOBLE accsse nahi milega  )
  
    Example 1: example ke code ke liye Transaction file me dekhiye Example 1.
    --------------------------------------------------------------------------------------------------------

    SO ISSE BACNE KE LIYE AAP KO  LOCAL SCOPE SE GLOBAL ME JANA HOGA .
    uske liye hun "\"  ka us ekarte hai.
    Example 1.1: example ke code ke liye Transaction file me dekhiye Example 1.1.  

    esko bhi aap 'use' kye World se solve kar sakte hai same pahale ki tarah
    Example:
    */
    // use DateTime;
    //eske use karke bhi hum globle me search kar sakte hai
    //pahle vala method best tha
    /*
    -----------------------------------------------------mip-------------------
    ----its most importent-----


    AAAP CHAHE THO AAP PHP ME JO BUILT IN CLASSS HAI UNKI TARAH KI CLASS MATLAB SAME NAME KI BHI CLASS 
    BANA SAKTE HAI JAISE MAINE ' DateTime' CLASS BAYA HAI
  */

DateTime();
// ab ye  predefine function hai likin nameSpace ki vajah de bina "\" opereator ke use kiya hai kisse php 
// globle ki jagah local me search karega
