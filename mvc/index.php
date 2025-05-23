<?php
declare(strict_types=1);
require_once __DIR__ . '/Router.php';
// echo __DIR__;
// require_once __DIR__ . '/app/controller/HomeController.php';
require_once __DIR__.'/autoloader.php';
use App\Controller\HomeController;
define('VIEW_PATH', __DIR__.'/viwe');


$router = new Router();

$router->get('/', [HomeController::class, 'index']);
$router->get('/home', [HomeController::class, 'home']);

$router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));

?>