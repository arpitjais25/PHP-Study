<?php
declare(strict_types=1);

namespace App\Exceptions;
class RouteNotFound extends \Exception{
    protected $message = "<h1>404 Page not Found!!</h1>";
}