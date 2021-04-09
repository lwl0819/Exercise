<?php
include "clothes.php";

class Paint extends Clothes{
    protected $length;
    protected $waist;

    public function __construct($outsidename,$outsidePrize,$outsidelength,$outsidewaist){
        parent::__construct($outsidename,$outsidePrize);
        $this->length = $outsidelength;
        $this->waist = $outsidewaist;

    }
    public function setlength($outsidelength){
        $this->length = $outsidelength;
    }
    public function getlength(){
        return $this-> length;
    }
    public function setwaist($outsidewaist){
        $this->waist = $outsidewaist;
    }
    public function getwaist(){
        return $this-> waist;
    }

    public function dowash(){
        $string ="用手洗 !再".parent::dowash();
        return $string;

        //return "用手洗 !";

    }
    public function __destruct()
    {
        
    }
    
        
    
}

?>
