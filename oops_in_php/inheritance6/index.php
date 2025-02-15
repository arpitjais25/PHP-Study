<?php 
require_once __DIR__.'/Toaster.php';
require_once __DIR__.'/ToasterPro.php';
// use oops_in_php\inheritance6\Toaster;
// use Oops_in_php\Inheritance6\Toaster;
$toaster= new ToasterPro();
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->toastBagel();