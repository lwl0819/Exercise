<?php

namespace kernel;
use config\Config;
use config\Router;

require_once(APP_PATH.'config/config.php');
require_once(APP_PATH.'config/router.php');
require_once(APP_PATH.'vendor/autoload.php');

class Kernel {

    protected $_config;
    protected $_router;
    protected $uri = array();

    public function __construct(){
        $this->_config = new Config(); 
        $this->_router = new Router($_SERVER);
    }

    public function run(){
        spl_autoload_register(array($this, 'loadClass'));
        $this->unregisterGlobals();
        $this->_config->show();

        //由路由設定，取出需要使用的控制器
        include ('Router.php');
        $uri = $this->_router->run();
        $controller = 'App\\Controllers\\'.$uri[1];
        //找出控制器後，程式交給控制器執行
        if (!class_exists($controller)){
            exit($controller.'控制器不存在');
        } else {
            (new $controller($uri[0]))->run();
           // \call_user_func_array($dispatch);
        }
    }

    //自動加載類別
    public function loadClass($className){
        $classMap = $this->classMap();

        if (isset($classMap[$className])){
            $file = $classMap[$className];
        } elseif (strpos($className, '\\') !== false){
            //包含 app 目錄下的文件檔案
            $file = APP_PATH.str_replace('\\','/',$className).'.php';
            if (!is_file($file)){
                return ;
            }
        } else {
            return;
        }
        include $file;
    }

    //類別對應命名空間
    public function classMap(){
        return [
            'kernel\Controller' => CORE_PATH.'Controller.php',
            'kernel\Model' => CORE_PATH.'Model.php',
            'kernel\View' => CORE_PATH.'View.php',
            'kernel\Router' => CORE_PATH.'Router.php'
        ];
    }
    //取消全域自定義變數
    public function unregisterGlobals(){
        if (\ini_get('register_globals')){
            $array = array('_SESSION','_POST','_GET','_COOKIE','_REQUEST','_SERVER','_ENV','_FILES');
            foreach ($array as $value) {
                foreach ($GLOBALS[$value] as $key => $var) {
                    if ($var === $GLOBALS[$key]){
                        unset($GLOBALS[$key]);
                    }
                }
            }
        }
    }
}