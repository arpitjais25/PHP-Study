<?php
declare(strict_types=1);
// namespace oops_in_php\inheritance6;
class ToasterPro extends Toaster{

    public int $size = 4;//overriddind the size property
    public function toastBagel(){
        foreach($this->slices as $i => $slice){
            echo ($i+1). ': Toasting '.$slice .' with bagels option'.PHP_EOL/*EOL = end of line */;
        }
    }

}