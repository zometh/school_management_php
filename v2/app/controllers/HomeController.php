<?php

class HomeController{
    public function index(){
        require '../app/views/home/index.php';
    }
    public function errorPage(){
        require '../app/views/home/404.php';
    }
}