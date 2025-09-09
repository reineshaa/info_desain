<?php

class Connection {
    private $hostname = "localhost";
    private $username = "root";
    private $password = "12345";
    private $dbname = "info_desain";

    public function connect(){
        return new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
    }

}