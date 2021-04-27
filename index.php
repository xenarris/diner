<?php
//This is my controller

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

//Create an instance of the base class
$f3 = Base::instance();

//Define a default route
$f3 -> route('GET /', function() {
    //display the homepage
    $view = new Template();
    echo $view->render('views/home.html');
    }
);

$f3 -> route("GET /breakfast", function () {
    //display the breakfast page
    $view = new Template();
    echo $view->render('views/breakfast.html');
});

$f3 -> route("GET /lunch", function () {
    //display the lunch page
    $view = new Template();
    echo $view->render('views/lunch.html');
});

//Run fat free
$f3->run();