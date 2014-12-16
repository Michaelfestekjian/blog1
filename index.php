<?php
require_once(__DIR__ . "/controller/login-verify.php");
require_once(__DIR__ . "/view/header.php");
if(authenicateuser) {
//header is first beacuse the folder is set up in this way/order
    require_once(__DIR__ . "/view/navigation.php");
}
require_once(__DIR__ . "/controller/create-db.php");
require_once(__DIR__ . "/view/footer.php");
require_once(__DIR__ . "/controller/read-posts.php");
//__dir__ is the directory
    // the . or dot is to common another folder
    //also we had more code in this file and we split them in the header and footer file and added and pasted the tags in there 
