<?php
declare(strict_types=1);
// declare(strict_types=1);

require_once __DIR__ . '/RouteNotFound.php';
// require_once __DIR__.'/about.php';

class Router
{
    private array $routes;
    public function register(string $route, callable|array $action):self
    {
        // echo "<br>".$this->routes;
        $this->routes['/arpitPHP/phpstudy/oops_in_php/14_serverSupergloble' . $route] = $action;
        return $this;
    }
    public function resolve(string $requestUri)
    {   
        var_dump($this->routes);
        echo "<br>";
        echo "<br>";

        var_dump($requestUri);
        $route = explode('?', $requestUri)[0];
  
        
        // echo $route;
        // foreach(scandir($requestUri) as $path){
        //     if(is_dir($path)){
        //         continue;
        //     }

        // }
        // echo $route;
        $action = $this->routes[$route] ?? null;
        // echo is_string($action);
        echo "<br>";
        echo "<br>";

        var_dump($this->routes);
        if (!$action) {
            throw new RouteNotFound();
        }
        if (is_callable($action)) {
            return call_user_func($action);
        }
        if (is_array($action)) {
            [$class, $method] = $action;

            if (class_exists($class)) {
                $class = new $class();

                if (method_exists($class, $method)) {
                    return call_user_func([$class, $method], [0]);
                }
            }
        }



    }
}
?>