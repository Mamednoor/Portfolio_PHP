<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_NAME', 'portfolio');
define('DB_PORT', '3306');

 try{
    $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // $bdd = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";port=" . DB_PORT, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $err){
    die("ERROR: Could not connect. " . $err->getMessage());
}
