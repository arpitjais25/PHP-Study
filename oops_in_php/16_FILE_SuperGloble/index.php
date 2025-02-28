<?php
require_once __DIR__.'/Router.php';
require_once __DIR__.'/FileConrtoller.php';
use Oops_in_php\FILE_SuperGloble\FileConrtoller;
use Oops_in_php\FILE_SuperGloble\Router;
echo "<pre>";
// print_r($_SERVER['QUERY_STRING']);
$route = new Router();
    $route->register('/home', function(){
        echo 'Succsessfully hurray!!!!!!!!!!!!!!!!!';
});
$route->register('/form', [FileConrtoller::class, 'form']);
$route->register('/formSubmit', [FileConrtoller::class, 'formSubmit']);
$route->register('/imageShow',function(){
    echo 
        '<div><img src="./FileStorage/333046c3-0075-4bae-9db3-3e7f50f6c9ec.jpeg" style="width:400px;height:400px;"></div>';
    
} );
$route->resolve($_SERVER['REQUEST_URI']);

// print_r($_FILES);