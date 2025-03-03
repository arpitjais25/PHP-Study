<?php
declare(strict_types=1);

require_once __DIR__ . '/RouteNotFound.php';

class Router
{
    private array $routes;
    public function register(string $requestMethod, string $route, callable|array $action):self
    {

        $this->routes[$requestMethod][dirname($_SERVER['SCRIPT_NAME']) . $route] = $action;
        return $this;
    }
    public function get(string $get_route, callable|array $get_action):self
    {

        return $this->register('get', $get_route, $get_action);
    }
    public function post(string $post_route, callable|array $post_action):self
    {

        return $this->register('post', $post_route, $post_action);
    }
    public function resolve(string $requestUri, string $requestMethod)
    {   
        $route = explode('?', $requestUri)[0];
  
        $action = $this->routes[$requestMethod][$route] ?? null;
        if (!$action) {
            try{
            throw new RouteNotFound();
            }
            catch(RouteNotFound $e){
               echo $e->getMessage();
            }
            
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