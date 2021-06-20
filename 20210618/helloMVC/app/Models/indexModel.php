<?php
namespace App\Model;

use kernal\Model;

class indexModel extends Model{

    protected $name;

    public function __construct()
    {
        
    }
    public function __destruct()
    {
        $this->$name = "Peter";
    }

    public function printName(){
        return $this->$name;
    }

}


?>