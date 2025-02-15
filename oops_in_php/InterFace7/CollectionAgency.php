<?php
namespace Oops_in_php\InterFace7;
require_once __DIR__.'/DebtCollector.php';
class CollectionAgency implements DebtCollector{
    public function collect(float $wondAmount){
        $guaranted= $wondAmount * 0.5;
        return mt_rand($guaranted, $wondAmount);
    }
}