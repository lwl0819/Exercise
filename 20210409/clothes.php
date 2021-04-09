<?php

class Clothes {
    private $name;
    private $price;

    public function __construct($outsideName,$outsidePrize){
        $this->name = $outsideName;
        $this->prize = $outsidePrize;

    }

    public function setName($outsidename){
        $this->name = $outsidename;

    }

    public function getName(){
        return $this-> name;
    }
    public function setPrize($outsideprize){
        $this->prize = $outsideprize;
    }    
    public function getPrize(){
        return $this-> prize;
    
    }
    public function dowash(){
        return "用洗衣機洗";
    }
    public function __destruct()
    {
        
    }
    
}
?>