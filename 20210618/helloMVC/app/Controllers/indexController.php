<?php
namespace App\Controllers;

use kernel\Controller;
use App\Model\indexModel;

class IndexController extends Controller {

    public function run(){
        print "Hello , This is a good practice!!";
        $usernam = new indexModel();
        $result = $username->printName();

        print $result;
    }
}