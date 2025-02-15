<?php
// Traits php me Interface ki tarah kaam karte hai Qki ham pata hai ki PHP me multiple Inheritans nahi hote 
// jis prakar java me Interface ke madhyam se multiple inheritans sambhav hai vaise hi php me bhi Traits ka 
// madhyam se multiple Inheritans Sambhav hai
// require __DIR__.'/AllInOneCoffeeMaker.php';
require __DIR__.'/CappuccinoMaker.php';
require __DIR__.'/CoffeeMaker.php';
// require __DIR__.'/LatteMaker.php';
$CoffeeMaker = new CoffeeMaker();
$CoffeeMaker->makeCoffee();
echo"____________________________________________________________________________________________".PHP_EOL;
$CappuccinoMaker = new CappuccinoMaker();
$CappuccinoMaker->makeCoffee();
$CappuccinoMaker-> makeCappuccino();
echo"____________________________________________________________________________________________".PHP_EOL;
$LatteMaker = new LatteMaker();
$LatteMaker-> makeCoffee();
$LatteMaker-> makeLatte();
echo"____________________________________________________________________________________________".PHP_EOL;
$AllInOneCoffeeMaker = new AllInOneCoffeeMaker();
$AllInOneCoffeeMaker-> makeCappuccino();
$AllInOneCoffeeMaker-> makeCoffee();
$AllInOneCoffeeMaker-> makeLatte();
echo"____________________________________________________________________________________________".PHP_EOL;

// without using traits 
// output is an error--
//Fatal error: Cannot declare class CoffeeMaker, because the name is already in use in
// A:\xampp\htdocs\arpitPHP\phpstudy\oops_in_php\10_Traits_Interface\CoffeeMaker.php on line 3

?>