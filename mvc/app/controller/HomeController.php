<?php
namespace App\Controller;

use app\View;
class HomeController{
    public function index(){
        return (new View('index'))->render();
    }
    public function home(){
        echo "home!!";
    }
}

?>