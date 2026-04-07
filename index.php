<?php 

// require database, functions and router files
require 'db.php';
require 'functions.php';
require 'router.php';

// checks the arrary for the current browser link 
if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);
    echo "404 - Page Not Found. Current URI is: [" . $uri . "]";
}