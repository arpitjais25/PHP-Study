<?php
declare(strict_types=1);
namespace Oops_in_php\FILE_SuperGloble;
class Router{
    private array $routes;
    public function register(string $route, callable $action){
        $this->routes['/arpitPHP/phpstudy/oops_in_php/16_FILE_SuperGloble'.$route] = $action;
        echo $route."<br>register Runed";
        return $this;
    }
    public function resolve(string $requestUri){
        $action = $this->routes[$requestUri] ?? null;
        echo $requestUri."register runed";
        if(!$action){
            print_r($action);
            echo "<br>somthing Wrong!";
        }
        else{
            call_user_func($action);
        }
        echo "<br>resolve runed";
    }

}