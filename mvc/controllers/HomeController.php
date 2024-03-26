<?php
namespace App\Controllers;

use App\Models\ExampleModel;
use App\Providers\View;

class HomeController {
    
    public function index(){
       // $data = 'Hello from HomeController';
        $model = new ExampleModel;
        $data = $model->getData();
        //include 'views/home.php';
       View::render('home', ['var' => $data]);
    }

    public function home(){
        include 'views/home.php';
    }
}