<?php

use oops_in_php\magicMethods8\Invoice;
//1. php me total 17 magic methods hote hai Ex-- __construct, __set, __get, __clone, etc.
// enki starting __ se hoti hai
// php me eska use tab karte hai jab hame php ke object ke defoult action ko override karna ho.
//--->>>>2 eska matlab hai ki ab eski dushri file me eske aage ka padho
require_once __DIR__.'/Invoice.php';
//4.
$invoice = new Invoice();

echo $invoice-> amount.PHP_EOL;
//5. qki maine abhi tak koi bhi Invoice class me amount naam ka method nahi banay ahi fhir bhi get method dynamicly 
// amount methid ko bina banaye call kar raha hai aur amount ko bana rah ahi 
// hala ki bina ban eobject proprty ko banana __ set ka kaam hai
//aap amount ki vallu bhi set kar sakte hai

// IMPOTRENT-- ye constructor ki tarah ho hotr hai yeh bhi apne aap chalte hai jab kabhi ham us object ki property ko 
//call kar dete hi jo exit hi nahi kati to __get, __set  method apne aap hi chal jaye hai agar ye methid define kiye 
// jate hai to ha us proprty ko dynamicly create kar dete hai by using set method per ye define hona chahiye


//--> agar ham us proprty ko define kar de to __get aur __set method nahi chalte parantu agar vah proprty accessable 
//nahi hai arthat private  ya protected hai tab bhi __get aur __set method hi chalenge
// __________________________________________________________________________________________________

//__call and __callStatic function
// __call method->
// 1.

require_once __DIR__.'/CallAndCallStatic.php';
use magicMethods8\CallAndCallStatic;
$call = new CallAndCallStatic();
$call-> objectalyCallMethod(13,"some Description");
// parantu agar ham Staticly Methid ko call karte hai to hai to yah kaam nahi karta eske liye ham __callStatic 
// Method ka use karte hai
// ->>>2
// 3.

CallAndCallStatic::staticlyCallMethod(2,22,222,2222);
// ->>>4

// inka use case framworks me kiya jata hai
// ___________________________________________________________________________________________________

// __toString Magic Method->
require __DIR__.'/toString.php';
 $a=new For_toString_Magic_method\ToString();
 echo $a;
// ________________________________________________________________________________________________________


// __invoke Magic Method

require __DIR__.'/InvockMagicMethod.php';
$invoke=new For_using_Invoke_Magic_Method\InvockMagicMethod();
$invoke();
//jab tak ham Invoke Magic Method ko call nahi karte tab tak object callable nahi hota 
echo PHP_EOL;
var_dump(is_callable($invoke));
// use case =
// eska use tab karte hai jab hame ek class se keval ek hi kaam karvan ho ham task ko invoke magic method me lkh kr
//use aaram se class ke naam se call kar skte hai.//
//_______________________________________________________________________________________________________

// __dibugInfo() megic Method 
// eska use ham private member ki debuging ke time dikhane ke liye karte hai
require __DIR__.'/DebugInfo.php';
$debuginfo= new DebugInfo();
// var_dump($debuginfo);
print_r($debuginfo);
// bina use kiya out put-
// out put--
                /*object(DebugInfo)#5 (2) {
                    ["id":"DebugInfo":private]=>
                    int(203)
                    ["acountNumber":"DebugInfo":private]=>
                    string(10) "0123456789"
                  }*/
//bina __debugInfo method ke vardump karne par sari private info bhi chali jati hai
// aur __debugInfo use karne ka baad aap apne man se jo bhi info dena chahte hai vahi de sakte hai ya fhir 
//na den chahte hai to na bhi de skte hai
//use karne ke baad ka output---
//      public function __debugInfo():?array{
//          return null;
//      }
// output-
//          object(DebugInfo)#5 (0) {
//          } eski madad de aap apne man se kuch bhi return karva sakte hai null ke alava kuch bhi.

