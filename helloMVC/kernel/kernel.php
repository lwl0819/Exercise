<?php

namespace Kernel;
use config\Config;
use config\Router;

required_once(APP_PATH.'Config/Config.php');
required_once(APP_PATH.'Config/Router.php');
require_once(APP_PATH.'vendor/autoload.php');

class Kernel{
    protected $_config;
    protected $_router;
    protected $uri = array();

    public function __construct(){
        $this->_config = new Config();
        $this->_router = new Router($_SERVER);
    }
    public function run(){
        spl_autoload_register(array($this,'LoadClass'));
        $this->unregisterGlobals();
        $this->_config->show();

        include ('Router.php');
        $uri = $this->_router->run();
        $controller = 'App\\Controllers\\'.$uri[1];

        if(!class_exists($controller)){
            exit($controller.'控制器不存在');
        }else{
            (new $controller($uri[0]))->run();
        }
    }
    public function LoadClass($className){
        $classMap = $this->classMap();

        if(isset($classMap[$className])){
            $file = $classMap[$className];
        }elseif(strpos($className,'\\')!==false){
            $file = APP_PATH.str_replace('\\','/',$className).'.php';
            if(!is_file($file)){
                return;
            }
        }else{
            return;
        }
        include $file;
    }
    public function classMap(){
        return[
            'Kernel\Controller'=>CORE_PATH.'Controller.php',
            'Kernel\Model'=>CORE_PATH.'Model.php',
            'Kernel\View'=>CORE_PATH.'View.php',
            'Kernel\Router'=>CORE_PATH.'Router.php'
        ];
    }
    public function unregisterGlobals(){
        if(\ini_get('register_globals')){
            $array = array('_SESSION','_POST','_GET','_COOKIE','_REQUEST','_SERVER','_ENV','_FILEs');
            foreach($array as $value){
                foreach($GLOBALS[$value]as $key=>$var){
                    if($var === $GLOBALS[$key]){
                        unset($GLOBALS[$key]);
                    }
                }
            }
        }
    }
}
?>