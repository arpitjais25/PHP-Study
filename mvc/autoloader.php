<?php
declare(strict_types=1);
spl_autoload_register(function($classPath){
    // echo $classPath."<br>";
    $path = __DIR__.DIRECTORY_SEPARATOR.$classPath.'.php';
    // echo $path."<br>";
    if (file_exists($path)) {
        require_once $path;
    } else {
        echo "Class $classPath not found!";
    }

});