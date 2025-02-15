<?php
declare(strict_types=1);
require_once __DIR__.'/Router.php';
require_once __DIR__.'/about.php';
require_once __DIR__.'/Home.php';

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';
$router = new Router();
// mop----
// $router->register('/', function(){
//     echo 'Home';
// });
// $router->register('about.php', function(){
//     echo 'about page';
// });
$router
    ->register('/', [Home::class, 'index']);
echo $router->resolve($_SERVER['REQUEST_URI']);
?>