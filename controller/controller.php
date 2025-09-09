<?php

include_once __DIR__ . "/../model/model.php";

class Controller extends Model{
    public function getProjects(){
        return $this->findAll();
    }
    
    public function getProjectsBy(){
        if(!isset($_GET['id'])){
            return;
        }

        $onlyId = preg_replace('/\D/', '', $_GET['id']);
        if($onlyId !== ""){
            return $this->findOne($_GET['id']);
        }
    }
}
?>