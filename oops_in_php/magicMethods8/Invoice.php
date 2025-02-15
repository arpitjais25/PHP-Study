<?php
namespace oops_in_php\magicMethods8;
//2. usein __get and __set method
// basicly ham get aur set method ka use tab karte hai jab ham kabhi bina kishi calss ki property ko define kiye
// bhi usko call kar denge
//3.
 
class Invoice{
    public function __get(string $name){
        var_dump($name);
    }
    public function  __set($name, $value){
        var_dump($name, $value );
    }
}
//aap enka use public ya protrctected proprtyi ke geter aur seter method ki tara h bhi kar sakte hai
