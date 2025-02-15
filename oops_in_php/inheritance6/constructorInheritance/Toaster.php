<?php
declare(strict_types=1);
// namespace oops_in_php\inheritance6;
class Toaster{//agar hum kishi class method ya constant ke aage "final"  key Word ka use karte hai
    //to use kishi dushri class se Inherit nahi kiya ja sakta.
    public array $slices;
    public int $size;
    public function __construct(){
        $this->slices=[];
        $this->size=2;
    } 
    public function addSlice(string $slice):void{
        if (count($this->slices) < $this->size){
            $this ->slices[]=$slice;
        }
    }
    public function toast(){
        foreach($this->slices as $i => $slice){
            echo($i + 1). ' Toasting '. $slice.PHP_EOL/*terminal per line change karne ke liye*/;
        }
    }
}