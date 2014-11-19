<?php
require_once(__DIR__ . "/../model/config.php");
//creats a connection to the database 
//using the directory


//
//new database
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //the $title is to get the title from the database 
    
$query = $connection->query("INSERT INTO posts SET title = '$title'. post = '$post'");
//the $query to the database    
    
if($query) {
    echo "<p>sucessfully inserted post: $title</p>";
    //echos out that the connection post have been enterd

}
else{
echo "<p>$connection->error</p>";
}
//echos out that there is an error when ther is one 
    
  