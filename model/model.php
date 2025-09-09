<?php

class Model extends Connection{
    protected function findAll(){
        $sql = "SELECT * FROM project";
        $result = $this->connect()->query($sql);

        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    protected function findOne($id){
        $sql = "SELECT * FROM project WHERE id='$id'";
        $result = $this->connect()->query($sql);

        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
}