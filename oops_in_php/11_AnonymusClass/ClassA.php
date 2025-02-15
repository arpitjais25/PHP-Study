<?php
declare(strict_types=1);
namespace AnonymousClass;
class ClassA{
    public function __construct(public int $a, public int $b){} #Member Promotion
    public function foo():string{
        return 'foo';
    }
    public function bar():object{
        return new class($this->a, $this->b) extends ClassA{
            //anonymous class body 
            // yah class foo function aur classA ke member ko access nahi kar sakti parantu agar aap classA ko
            // Inherit kar ke to access kar saktia hai
            public function __construct(public int $a, public int $b){
                var_dump(parent::__construct($a, $b));//output-- NULL
                var_dump($this->foo());
            }

        };
    }
}
?>