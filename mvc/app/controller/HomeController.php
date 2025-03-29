<?php
namespace App\Controller;

use app\View;
class HomeController{
    public function index():View{
        //return (new View('index'))->render();--bus yahi tak se bhi kaam chal jaat baki aap improve bhi kar sakte hai
        // var_dump(View::make("index"));
        // $reternView = View::make("index");
        // echo $reternView;
        return View::make("index");
    }
    public function home(){
        echo "home!!";
    }
}

?>