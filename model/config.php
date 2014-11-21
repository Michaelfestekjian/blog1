<?php

require_once (__DIR__ . "/database.php");
session_start();
$path = "/Festekjianmblog/";
//$path is used in navigation.php in line 8 to look for the path blog

$host = "localhost";
//must be host to run host first 
$username = "root";
//the username is what to in put 2nd beacuse you not gonna put password befor the username 
$password = "root";
// after the username u add the password 
$database = "blog_db";
//must be in this order beacuse this is the order we set up our folders in 

if (!isset($_SESSION["connection"])) {
    $connection = new database($host, $username, $password, $database);
    $_SESSION{"connection"} = $connection; 
}
//database object