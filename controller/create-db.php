<?php

require_once(__DIR__ . "/../model/config.php");

$connection = new mysqli($host, $username, $password);
//mifht not need this line of code 
//this is the order we set up the username and password in 
//has our hos name and password stored

if ($connection->connect_error) {
    die("error: " . $connection->connect_error);
    // this is saying that if there is an error to just close and shut down the program
} else {
    echo "success" . $connection->host_info;
    //to connect to the host
}
$exists = $connection->select_db($database);

if (!$exists) {
    $query = $connection->query("CREATE DATABASE $database");

    if ($query) {
        echo "sucessfully created database: " . $database;
    }
} else {
    echo"database already exists.";
}

$query = $connection->query("CREATE TABLE posts ("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");
//not null is telling us to not null it so dont shut down rub on low speed 

if ($query) {
    echo"sucessfully create table: posts";
}


$connection->close();
