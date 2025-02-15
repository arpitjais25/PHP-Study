<?php
// declare(strict_types=1);
require __DIR__.'/LatteTraits.php';
require __DIR__.'/Traits.php';
require __DIR__.'/CoffeeMaker.php';

class LatteMaker extends CoffeeMaker{
    use LatteTraits, Traits;
    
}
?>