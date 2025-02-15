<?php 
require_once __DIR__.'/CollectionAgency.php';
use Oops_in_php\InterFace7\CollectionAgency;
use Oops_in_php\InterFace7\DebtCollector;
$collector= new CollectionAgency();
echo $collector->collect(100).PHP_EOL;

