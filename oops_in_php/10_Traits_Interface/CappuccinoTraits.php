<?php 
declare(strict_types=1);
trait CappuccinoTraits {
    public static function makeCappuccino():void{
        echo static::class.' is make Cappuccino'. PHP_EOL;
    }
}
?>