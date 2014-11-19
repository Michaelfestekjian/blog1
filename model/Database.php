<?php

//no body can modify these veriable thes are hidden
class Database {

// a class is an extensible program-code-template for creating objects
    //we use database beacuse it stores our information
    private $connection;
    private $host;
    private $username;
    private $password;
    private $Database;

    public function __construckt($host, $username, $password, $atabase) {
        $this->host = $hosts;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        //keeping this public beacuse no 1 needs to c it 
    }

    public function openconnection() {
        $this->connection = new mysql1($this->host, $this->username, $this->password, $this->database);
        //this is to call we dont need dollersighn in front of the word only iun front of this 

        if ($this->connection->connect_error) {
            //when adding this you dont need the $ in front of connection only is fron t of this
            die("error: " . $this->connection->connect_error);
            // this is saying that if there is an error to just close and shut down the program
        }
    }

    public function closeconnection() {
        //the reason it is public is beacuse we need to show it 
        if (isset($this->connection)) {
            //if tet is to call other ines of code
            $this->connection->close();
            //closing the cnnection
        }
    }

    public function query() {
        $this->openconnection();
        //opening the connection 

        $query = $this->connection->query($string);

        $this->closeconnection();
        //closing the connection 

        return $query;
    }

}

// private means that this veriable can only be reached in this file here 
//can not acess this out of this file 
