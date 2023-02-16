<?php
//This is my CONTROLLER for the week6 project

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route ("homepage" for hello project)
$f3->route('GET /', function (){

    $views = new Template();
    echo $views -> render('views/info.html');
});

//Run Fat-Free
$f3->run();