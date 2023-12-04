<?php

    require __DIR__.'/../vendor/autoload.php';
    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();

    $serverName = $_ENV["DB_SERVERNAME"];
    $userName   = $_ENV["DB_USERNAME"];
    $password   = $_ENV["DB_PASSWORD"]; 
    $dbname       = $_ENV["DB_NAME"];

    $connexion = mysqli_connect($serverName, $userName, $password, $dbname);

    if(isset($connexion->connect_error)){
        die('error connection here '. $connexion->connect_error);
    }
?>