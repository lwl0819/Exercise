<?php
namespace kernel;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View {
    protected $twig;
    
    public function __construct($viewpath){
        $loader = new FilesystemLoader(APP_PATH."/app/Views".$viewpath);
        $this->twig = new Environment($loader);
        
    }
    public function getTwig(){
        return $this->twig;
    }
    public function __destruct(){}
    
}