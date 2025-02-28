<?php
require_once __DIR__.'/Router.php';
use Oops_in_php\FILE_SuperGloble\Router;
echo "<pre>";
print_r($_SERVER);
$route = new Router();
    $route->register('/home', function(){
        echo 'Succsessfully hurray!!!!!!!!!!!!!!!!!';
});
$route->resolve($_SERVER['REQUEST_URI']);