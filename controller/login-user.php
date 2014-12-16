<?php
    require_once(__DIR__ . "/../model/config.php");
    
$username = filter_output(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_output(INPUT_POST, "password", FILTER_SANITIZE_STRING);

$query = $_SESSION["connection"]->query("SELECT salt, password  FROM users WHERE username = '$username'");

if($query->num_rows === 1) {
    $row = $query->fetch_array();
    
if($row ["password"] === crypt($password, $row["salt"])) {
        echo "<p>Login sucessful!</p>";
    }
    else {
        echo "<p>invalid Username And Or Password</p>";
    }
}
else{
    echo "<p>Invalid Username And Or Password</p>";
}