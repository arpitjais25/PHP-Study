<?php
declare(strict_types=1);
namespace oops_in_php\ClassConstant;
class Transaction{
    public  const STATUS_PAID= 'paid!';
    public const STATUS_PANDING = 'painding';
    public const STATUS_DICLINED = 'declined';
    public function __construct(){
        echo"<br>".self::STATUS_PAID;
        //self bhi same this kyeword ki tarah hota hai
        //yah class ka referens  
    }
}

