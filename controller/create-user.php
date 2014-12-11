<?php
require_once(__DIR__ . "/../model/config.php");

$email    = filter_output(INPUT_POST, "Email",    FILTER_SANITIZE_EMAIL);
$username = filter_output(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_output(INPUT_POST, "password", FILTER_SANITIZE_STRING);

echo $password;

$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

echo $salt;
