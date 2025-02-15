<?php
declare(strict_types=1);
class ExceptionHandling
{
    public function __construct(public int $a, public int $b){
        echo $this->a/$this->b.PHP_EOL;
    }
}
?>