<?php
    $x=13.5; //is a floating number.
    echo $x."<br>";
    var_dump($x);

    //float number in expenencial form..
    $y=13.5e3;
    var_dump($y);
    $z=13.5e-3;
    var_dump($z);

    //max floating number in php
    var_dump(PHP_FLOAT_MAX);


    //for number round down
    var_dump($a=floor((0.1+0.7)*10));

    //for number round down
    var_dump($a=ceil((0.1+0.7)*10));


?>