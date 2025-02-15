<?php

declare(strict_types=1);
class Transaction{
    public ?Customer $customer=null;
    public function __construct(
        private float $amount,
        private string $description
    ){}//constructor property prmotion feature
    //yah feature php me 8.0 me aya esme aap constructor me hi property
    // ko define kar sakte ho jise constructor proprty 
    // promotion ke naam se jana jaata hai 
    //yah ek short hand method hai 
}