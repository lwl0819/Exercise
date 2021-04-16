<?php
include "doWash.php";
include "Mark.php";

abstract class Clothes implements doWash{
    private $name;
    private $prize;
    
    public function __construct($outsideName, $outsidePrize){
        $this->name = $outsideName;
        $this->prize = $outsidePrize;
    }

    public function setName($outsideName){
        //$this->name = $outsidename;
    }
    
    public function getName(){
    
    }

    public function setPrize($outsidePrize){
        //$this->prize = $outsidePrize;
    }

    public function getPrize(){
        //return $this->prize;
    }

    public function doWash(){
        //return "用洗衣機清洗！";
    }

    public function __destruct(){
        
    }
    
}

?>