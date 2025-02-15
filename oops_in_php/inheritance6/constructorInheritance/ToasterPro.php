<?php
declare(strict_types=1);
// namespace oops_in_php\inheritance6;
class ToasterPro extends Toaster{

// NOTE: THE CONSTRUCTOR IS not allowing the segnather Rule  
    public function __construct(){//constructor overriding NAHI HOTI qki vah Segnether Rule ko follow nahi karte.
        parent::__construct();//its like a super key word in java
        //iska matalab hai pahile parent class ka constructor call hoga fhir chiald class ka constructor  
        //normal kuch khash nahi hai parent :: keyword se aap parent class ke kishi bhi member ko access
        // kar sakte hai vaise hi cinstructor access kiya gay hai.
        $this->size=4; //overriding size member
    }
    public function toastBagel(){
        foreach($this->slices as $i => $slice){
            echo ($i+1). ': Toasting '.$slice .' with bagels option'.PHP_EOL/*EOL = end of line */;
        }
    }

}