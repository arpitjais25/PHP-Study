<?php
//in decimal
    $x=(int)'60';
    var_dump($x);
    echo '<br>';

    //max integer
    $y=PHP_INT_MAX;
    var_dump($y);

    
    //in binary form...
    $a=0b110;
    echo '<br>';
    var_dump($a);

    //in octole form
    $octal=055;
    echo '<br>';
    var_dump($octal);

////typecasting...........................
    $c= (int)'87hgkja';  //agar age ke side likha hai to lega ek bar string aa jane ke bad age ka sara 0 kar dega agar '87hgkja' ke sthan per 'hgkja87' hota to output me 0 aata .
    echo '<br>';
    var_dump($c);

    //type casting of  float in integer
    $float_value=(int)98.77;
    echo '<br>';
    var_dump($float_value);
    

?>