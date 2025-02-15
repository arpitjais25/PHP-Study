<?php 
declare(strict_types=1);
trait LatteTraits{
    public static function makeLatte():void{
        echo static::class.' is make Latte'. PHP_EOL;
    }
}
?>