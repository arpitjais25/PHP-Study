<?php
declare(strict_types=1);
namespace Oops_in_php\FILE_SuperGloble;
class Router{
    private array $routes;
    public function register(string $route, callable|array $action){
        $this->routes['/arpitPHP/PHP-Study/oops_in_php/16_FILE_SuperGloble'.$route] = $action;
        echo $route."<br>register Runed";
        return $this;
    }
    public function resolve(string $requestUri){
        echo "<br>resolve Runed<br>";
        var_dump($requestUri);
        $requestUri=explode('?',$requestUri)[0];
        echo "<br>";
        print_r( $this->routes['/arpitPHp/PHP-Study/oops_in_php/16_FILE_SuperGloble/form']);
        $action = $this->routes[$requestUri] ?? null;
        echo $requestUri."<br>resolve runed<br>";
        var_dump($action);
        if(!$action){
            
            echo "<br>somthing Wrong!";
        }
        elseif(is_array($action)){
            [$class, $method]=$action;
            // var_dump($action);
            if(class_exists($class)){
                $classObj= new $class();
                if(method_exists($classObj,$method)){
                    call_user_func([$classObj::class, $method]);
                    echo "its runn---------";
                }
            }
        }
       
        else{
            call_user_func($action);
        }
        echo "<br>resolve runed";
    }

}