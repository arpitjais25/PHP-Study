<?php
declare(strict_types=1);
require_once __DIR__.'/Router.php';
require_once __DIR__.'/HomeController.php';
require_once __DIR__.'/InvoiceController.php';

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';
$router = new Router();

$router
    // ->register('/', [HomeController::class, 'index'])
    // ->register('/getandpost', [InvoiceController::class, 'index'])
    // ->register('/getandpost/form', [InvoiceController::class, 'form'])
    // ->register('/about/raam/seeta',[HomeController::class, 'about'])
    // ->register('/getandpost/create',[InvoiceController::class, 'create'])
    // ->register('/getandpost/store',[InvoiceController::class, 'store']);


    //mop----- ye bina get aur post ke hai aap comment ko hata kar aur get aur post methods(router class ke) ko
    // comment kar ke chack kar sakte hai 


    // echo '<pre>';
    // print_r($_SERVER['REQUEST_URI']);
    // echo '</pre>';
    ->get('/', [HomeController::class, 'index'])
    ->get('/getandpost', [InvoiceController::class, 'index'])
    ->get('/getandpost/form', [InvoiceController::class, 'form'])
    ->get('/about/raam/seeta',[HomeController::class, 'about'])
    ->get('/getandpost/create',[InvoiceController::class, 'create'])
    ->post('/getandpost/create',[InvoiceController::class, 'store']);
 $router->resolve($_SERVER['REQUEST_URI'],strtolower($_SERVER['REQUEST_METHOD']));

?>