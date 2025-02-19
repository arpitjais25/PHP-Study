<?php
declare(strict_types=1);
require_once __DIR__.'/Router.php';
require_once __DIR__.'/about.php';
require_once __DIR__.'/HomeController.php';
require_once __DIR__.'/InvoiceController.php';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';
$router = new Router();
// mop----
// $router->register('/', function(){
//     echo 'Home';
// });
// $router->register('about.php', function(){
//     echo 'about page';
// });
$router
    ->register('/', [HomeController::class, 'index'])
    ->register('/home', [InvoiceController::class, 'home'])
    ->register('/about/raam/seeta',[HomeController::class, 'about']);
    echo '<pre>';
    print_r($_SERVER['REQUEST_URI']);
    echo '</pre>';
 $router->resolve($_SERVER['REQUEST_URI']);

// mop---.htaccess file jodna bahut jaruri hai
?>