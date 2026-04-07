<?php

// error checker file and composer files 
require 'error.php';
require_once __DIR__ . '/vendor/autoload.php';

// Load the .env file from the current directory
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Access the variables in .env file
$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$db = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];

//databse dsn string
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";


// test databse connection with a try catch 
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //  echo "Connected successfully!"; 
} catch (PDOException $e) {
    // if fail die and produce message
    die("Connection failed: " . $e->getMessage());
    
}