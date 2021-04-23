<?php
include "doWash.php";

abstract class Clothes implements doWash{
    private $name;
    private $prize;
    
    public function __construct($outsidename, $outsidePrize){
        $this->name = $outsidename;
        $this->prize = $outsidePrize;
    }

    public function setName($outsidename){
        //$this->name = $outsidename;
    }
    
    public function getName(){}

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