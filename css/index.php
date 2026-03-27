<?php 
require 'functions.php';


$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/PHPWebsite/index.php' || $uri === '/PHPWebsite/' )
    {
        require 'controllers/index.php';
    } 
?>

