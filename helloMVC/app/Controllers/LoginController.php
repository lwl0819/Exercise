<?php

namespace App\Controllers;

use kernel\Controller;
use App\Models\indexModel;
use App\Views\indexView;
use App\DBs\DB;

class LoginController extends Controller {
   
    protected $paras;

    public function __construct($parameter){
       parent::__construct($parameter);
    }

    public function getUri(){
        $this->paras = parent::getUri();
        return $this->paras;
    }
    
    public function run(){
        $db = new DB("students");
        var_dump($db->fetchAll());
    }
}