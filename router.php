<?php 

// gets uri path  from the server
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//makes it lowercase
$uri = strtolower($uri);

// Remove the folder name if present
$uri = str_replace('/phpwebsite', '', $uri);

//  Clean up leading/trailing slashes and ensure it's NEVER empty
$uri = '/' . trim($uri, '/');

// Define the routes in a array
$routes = [
    '/' => 'controllers/index.php',
    '/index' => 'controllers/index.php',
    '/index.php' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/contact.php' => 'controllers/contact.php',
];