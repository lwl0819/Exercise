<?php
namespace kernel;

class Controller {
    protected $tmp_uri = array();
    protected $uri = array();

    public function __construct($parameter){
        $this->initUri($parameter); 
    }
        
    private function initUri($parameter){
        if (strlen(trim($parameter))){
            $this->tmp_uri = \explode('&',$parameter);
            foreach ($this->tmp_uri as $value) {
                $info = (explode('=',$value));
                $this->uri[$info[0]] = $info[1];
            }
        }
    }
    
    public function getUri(){
        return $this->uri;
    }
}