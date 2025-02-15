<?php
declare(strict_types=1);
use ChildClass\LateStaticBindingClassB;
require_once __DIR__.'/LateStaticBindingClassA.php';
require_once __DIR__.'/LateStaticBindingClassB.php';
// late Stetic binding ka pariyog tab kiya jata hai jab hame jab hame kishi perticular method ko call karne vali 
// subclass(child class) ko call karna hota hai

//-> LSB me self key word ke sthan par static kye word ka use kiya jata hai
// qki static kye word us particular class ko return karta hai jis class ki madat se koi function call kiya jata hai
//mostImpotentPOint(self compile time per class ko refer kata hai aur static runtime per kon si class ko refer karna 
//hai select kata hai basicly yah bhi class ko hi refer karta hai lekin yah runtime per konsi class ko refer karna hai 
// ya sunischit krta hai )


/* agar ham this ka priyog karte hai to vah us class ke object ko refer karta hai aur self  us class ko refer 
karta hai parantu inheritans ke hishab se ahgar koi class ko kishi child class inherit karti hai aur agar ab ham
kishi parent class ke method ko call katre hai by using object and instant of child class to child class ke stahan per
parent class ka object banke us methed ko call hoga esse bachne ke liye ham static kye word ka use karte hai. 
  */ 
$obj = new ParentClass\LateStaticBindingClassA();
var_dump($obj->make());
$obj = new ChildClass\LateStaticBindingClassB();
var_dump($obj->make());
  /**
     * without using LSB output---
     * PS A:\xampp\htdocs\arpitPHP\phpstudy\oops_in_php\LateStaticBinding9> php index.php
        string(35) "ParentClass\LateStaticBindingClassA"
        string(23) "ParentClass\LateStaticBindingClassA"
        PS A:\xampp\htdocs\arpitPHP\phpstudy\oops_in_php\LateStaticBinding9> 
   */
  //spast hai ki classB ka object nahi bana esi problem ko dur karne ke liya LSB ka pariyog kiya jata hai
  /**
   * Using LSB---
   * PS A:\xampp\htdocs\arpitPHP\phpstudy\oops_in_php\LateStaticBinding9> php index.php
        string(35) "ParentClass\LateStaticBindingClassA"
        string(34) "ChildClass\LateStaticBindingClassB"
        PS A:\xampp\htdocs\arpitPHP\phpstudy\oops_in_php\LateStaticBinding9> 
   */
?>