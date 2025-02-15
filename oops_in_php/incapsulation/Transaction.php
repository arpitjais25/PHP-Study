<?php
declare(strict_types=1);
namespace oops_in_php\incpsulation;
class Transaction{
    /*public float $amount;
    public function __construct(float $amount){
        $this->amount=$amount;
    }*/
    //chuki ye function public hai to hum easialy kishi dushri file (index.php) me object bana kar amount ko 
    //value chack kar sakte hai 
    //lekkin problem vaha aayegi jab hum public ki jagah $amount ko private kar denge

    /*
    private float $amount;
    public function __construct(float $amount){
        $this->amount;
    }
        */
    //ab hum getter aur setter method user defind method  ka use karke $amount ki value chack kar sakte hai.
    //parntu yah bhi sahi nahi hai sequrity purpose se kiuki koi bhi geter aur seter se bhi access kar sakta hai
    //aur ye encasulation ko bhi break katre hai

    //-------------------------------------------------------------------------------------------------------
    private float $amount;
    public function __construct(float $amount){
        $this->amount=$amount;
    }
    public function process(){
        echo 'Processing $'.$this->amount.' transaction';
        // $this->generateReceipt();
        // $this->sendEmail();
    }
    private function generateReceipt(){
        
    }
    
    private function sendEmail(){

    }
    

}