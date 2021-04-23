<?php

class human{

    private $run;
    public $name;

    public function __construct($name)
    {
      $this ->name = $name;
    }
    public function setRun(Runner $runner){
        $this->run = $runner;
    }

public function getRun() : Runner{
    return $this-> run ;
}

}
?>