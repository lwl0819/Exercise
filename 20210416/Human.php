<?php

include "doWash.php";


class Human{


    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name  = $name;
        $this->age = $age;
    }

    public function doWash(){
        return "洗乾淨了~~~";
    }

    public function __destruct(){
        
    }
    
        
    
    
        
    
}
?>