<?php
declare(strict_types=1);
namespace app;
use app\Exceptions\ViewNotFoundException;
class View{
    public function __construct(protected string $viwe, protected array $params = []){}
    public function render():string{
        $view_path = VIEW_PATH.'/'.$this->viwe.'.php';
        echo "veiw path ".$view_path;
        if(! file_exists($view_path)){
            throw new ViewNotFoundException();
        }else{
            ob_start();
            include $view_path;
            $a= ob_get_clean();
            // echo "<br>buffer value start ".$a."buffer value end";
            var_dump($a);
            return (string)$a;
        }
    }
    // bus etna hi hai view ko jodne ke liye baki ese abhi aap aur improve bhi kar sakte hai
    // chalo karte hai
    public static function make(string $view, array $params=[]):static{
        echo "make method called<br>";
        return new static ($view, $params);
    }
    public function __tostring():string{
        echo "make __tostring called<br>";
        return $this->render();
    }
}