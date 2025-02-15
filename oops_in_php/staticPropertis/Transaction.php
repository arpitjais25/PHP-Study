<?php
declare(strict_types=1);
namespace Oops_in_php\StaticPropertis;
class Transaction{
    public static int $count=0;
    public function __construct(
        public float $amount,
        public string $description //associative object
    ){
        self::$count++; //jitni baar bhi instence creat hoga utni baar count++ hoga. 
    }
    public function process(){
        echo 'Processing...';
    }
}