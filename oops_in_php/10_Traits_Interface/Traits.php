<?php
declare(strict_types=1);
trait Traits{
    public static function makeCoffee():void{
        echo static::class.' is make Coffee'. PHP_EOL;
    }
} 
?>