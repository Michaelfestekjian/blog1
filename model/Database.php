<?php
//no body can modify these veriable thes are hidden
class Database {

// a class is an extensible program-code-template for creating objects
    //we use database beacuse it stores our information
    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
    //added the error beacuse we never has one 
    public $error;

    public function __construckt($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        //keeping this public beacuse no 1 needs to c it 

        $this->connection = new mysqli($host, $username, $password);

//mifht not need this line of code 
//this is the order we set up the username and password in 
//has our hos name and password stored
        if ($this->connection->connect_error) {

            die("error: " . $this->connection->connect_error);

            // this is saying that if there is an error to just close and shut down the program
        } else {
            echo "success" . $this->connection->host_info;
            //to connect to the host
        }
        $exists = $connection->select_db($database);

        if (!$exists) {
            $query = $this->connection->query("CREATE DATABASE $database");

            if ($query) {
                echo "sucessfully created database: " . $database;
            }
        } else {
            echo"database already exists.";
        }
    }

    public function openconnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
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

    public function query($string) {
        $this->openconnection();
        //opening the connection 

        $query = $this->connection->query($string);

        if (!$query) {
            $this->error = $this->connection->error;
            //shpwing that we have an echo error
        }

        $this->closeconnection();
        //closing the connection 

        return $query;
    }

}

// private means that this veriable can only be reached in this file here 
//can not acess this out of this file 
