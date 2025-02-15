<?php
    declare(strict_types=1);
    class Transaction{
        //access modifire
        private /*?float (jab hum kabhi '?' ka use kishi variable ke datatype ke age karte hai to uska matlab
        hota hai ki aap use variabble me NULL value bhi dal sakte hai)*/float $amount; //public spacifire 
        //member ko publicly access de deta hai.

        public string $discription;//private spacifire member ko publicly access nahi deta hai. kevel usi class 
        // me uska  use kiya ja sakta hai.   (aage ke liye index.php dekho fhir error aayegi vo bi dekho).


        /*-----Constructor----*/
        public function __construct(float $amounta, string $discriptiona){ //same java ki tarah hai nus java 
            //me jaha cunstructor us class ke naam se banta tha aur uska koi bhi access spacifile  nahi hota 
            // tha vahi esme uske liye ek dushra kyeword __construct() ka use karte hai.
            $this->amount=$amounta;  // $this->amount ka matlab hai ki us class ka member me ye value save kara do
            $this->discription=$discriptiona;

        }
        // user define function
        public function addTax(float $rate):Transaction{
            $this->amount+= $this->amount * ($rate/100);
            return $this;
            
        }
        public function getAmount():float{
            return $this->amount;
        }
    

    // distructor in php _______ :php me destructor tab kaam karta hai jab class ka schope khatam ho jaya hai 
    // matala jab  us object ka kam khatam ho jaya hai to yah obj ki delet kar deta hai
    public function __destruct(){// yah kishi prakar ka koi augument nahi lete hai
        echo "Distruct".$this->discription ."<br";
    }

    }
