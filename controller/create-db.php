<?php

require_once(__DIR__ . "/../model/config.php");

$query = $connection->query("CREATE TABLE posts ("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");
//not null is telling us to not null it so dont shut down rub on low speed 

if ($query) {
    echo"sucessfully create table: posts";
} else {
    echo"<p>$connection->error<p>";
}
