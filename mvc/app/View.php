<?php
declare(strict_types=1);
namespace app;
use app\Exceptions\ViewNotFoundException;
class View{
    public function __construct(protected string $viwe, protected array $params = []){}
    public function render(){
        $view_path = VIEW_PATH.'/'.$this->viwe.'.php';
        if(! $view_path){
            throw new ViewNotFoundException();
        }
        else{
            include $view_path;
        }
    }
}