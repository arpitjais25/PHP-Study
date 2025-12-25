<?php
declare(strict_types=1);
spl_autoload_register(function($classPath){
    // spl_autoload_register ka ek sidhhant hai jab bhi class call hogi tab run hoga  automatic
//     Ye PHP ko bolta hai:

// “Jab bhi koi class use ho aur wo class abhi loaded na ho,
// toh is function ko automatically call kar dena.”
    // echo $classPath."<br>";
    $path = __DIR__.DIRECTORY_SEPARATOR.$classPath.'.php';
    // echo $path."<br>";
    if (file_exists($path)) {
        require_once $path;
    } else {
        echo "Class $classPath not found!";
    }

});