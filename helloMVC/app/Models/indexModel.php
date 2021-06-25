<?php
namespace App\Models;

use kernel\Model;

class indexModel extends Model{

    protected $name;

    public function __construct(){
        $this->name = "Peter";
    }

    public function printName(){
        return $this->name;
    }

    public function __destruct(){

    }
}