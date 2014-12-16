<?php
require_once(__DIR__ . "/../model/config.php");

function authenicateuser() {
    if(isset($_SESSION["authenicated"])) {
        
    }
    else{
    if($_SESSION["authenicated"] != true) {
        return false;
        }
        else {
            return true;
        }
    }
}