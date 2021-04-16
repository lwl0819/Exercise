<?php
include "clothes.php";

class Paint extends Clothes{
    private $length;
    private $waist;
    private $mark;

    public function __construct($outsideName,$outsidePrize,$outsideLength,$outsideWaist){
        parent::__construct($outsideName,$outsidePrize);
        $this->setName($outsideName);
        $this->setPrize($outsidePrize);
        $this->length = $outsideLength;
        $this->waist = $outsideWaist;
    }

    public function setName($outsideName){
        $this->name = $outsideName;
    }

    public function setPrize($outsidePrize){
        $this->prize = $outsidePrize;
    }

    public function setMark(Mark $mark){
            $this->mark = $mark;
    }      

    public function getMark(): Mark{
        return $this->mark;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrize(){
        return $this->prize;
    }
    public function getLength(){
        return $this->length;
    }

    public function getWaist(){
        return $this->waist;
    }

    public function doWash(){
        $string = "用手洗！再".parent::doWash();
        return $string;
        //return "用手洗！";
    }
    public function __destruct(){    
    }
    
        
    
}

?>
