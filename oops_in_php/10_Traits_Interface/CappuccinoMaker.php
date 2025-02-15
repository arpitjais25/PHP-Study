<?php
// declare(strict_types=1);
require __DIR__.'/CappuccinoTraits.php';
require __DIR__.'/Traits.php';
require __DIR__.'/CoffeeMaker.php';

class CappuccinoMaker extends CoffeeMaker{
    use CappuccinoTraits, Traits;
   
}
?>