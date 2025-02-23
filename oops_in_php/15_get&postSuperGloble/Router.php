<?php
declare(strict_types=1);
// declare(strict_types=1);

require_once __DIR__ . '/RouteNotFound.php';
// require_once __DIR__.'/about.php';

class Router
{
    private array $routes;
    public function register(string $requestMethod, string $route/**for path */, callable|array $action/**for function */):self
    {

        $this->routes[$requestMethod][dirname($_SERVER['SCRIPT_NAME']) . $route] = $action;
        return $this;
    }
    public function get(string $get_route/**for path */, callable|array $get_action/**for function */):self
    {

        return $this->register('get', $get_route, $get_action);
    }
    public function post(string $post_route/**for path */, callable|array $post_action/**for function */):self
    {

        return $this->register('post', $post_route, $post_action);
    }
    public function resolve(string $requestUri, string $requestMethod)
    {   
        // echo "<pre>";
        // echo $requestUri;
        // echo "<pre>";
        // echo "<br>";
        // echo "<br>";

        // var_dump($requestUri);
        $route = explode('?', $requestUri)[0];
  
        
        // echo $route;
        // foreach(scandir($requestUri) as $path){
        //     if(is_dir($path)){
        //         continue;
        //     }

        // }
        // echo $route;
        $action = $this->routes[$requestMethod][$route] ?? null;
        // var_dump($action);
        // echo "<br>";
        // echo "<br>";

        // var_dump($this->routes);
        if (!$action) {
            try{
            throw new RouteNotFound();
            }
            catch(RouteNotFound $e){
               echo $e->getMessage();
            //    echo "<h1>404</h1>";
            }
            
        }
        if (is_callable($action)) {
            // echo "if ------------------------------------1";

            return call_user_func($action);
        }
        if (is_array($action)) {
            // echo "if ------------------------------------2";
            // print_r($action);
            [$class, $method] = $action;

            if (class_exists($class)) {
                $class = new $class();

                if (method_exists($class, $method)) {
                    // echo "if ------------------------------------3";
                    return call_user_func([$class, $method], [0]);
                }
            }
        }



    }
}
?>