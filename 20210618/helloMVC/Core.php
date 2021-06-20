<?php

class Core{

    public  function run(){
    
    spl_autoload_register(array($this, 'loadClass'));
    $this->setReporting();
    $this->removeMagicQuotes();
    $this->unregisterGlobals();
    print $this->Route();
    }
    function setReporting(){
        if (APP_DEBUG === true) {
            error_reporting(E_ALL);
            ini_set('display_errors','On');
         } else {
            error_reporting(E_ALL);
            ini_set('display_errors','Off');
            ini_set('log_errors', 'On');
            ini_set('error_log', RUNTIME_PATH. 'logs/error.log'); // 注意 tmp/logs/error.log 檔案是否存在
         }
     

    }
    function stripSlashesDeep($value) {
        $value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
        return $value;
      }
    function removeMagicQuotes(){
        if ( get_magic_quotes_gpc()) {
            $_GET = stripSlashesDeep($_GET );
            $_POST = stripSlashesDeep($_POST );
            $_COOKIE = stripSlashesDeep($_COOKIE);
            $_SESSION = stripSlashesDeep($_SESSION);
           }
    }
    function unregisterGlobals(){
        if (ini_get('register_globals')) {
            $array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
            foreach ($array as $value) {
              foreach ($GLOBALS[$value] as $key => $var) {
                if ($var === $GLOBALS[$key]) {
                  unset($GLOBALS[$key]);
                }   
              }
            }
         }
    }
    function Route(){
        $controllerName = 'Index';
        $action = 'index';
        
        
        //拆解URL
        if (!empty($_GET['url'])){
           $url = $_GET['url'];
            $urlArray = explode('/', $url);

            $controllerName = ucfirst($urlArray[0]);
            
            array_shift($urlArray);
            $action = empty($urlArray[0]) ? 'index' : $urlArray[0];

            array_shift($urlArray);
            $qurryString = empty($urlArray) ? array() : $urlArray;
            return var_dump($qurryString);
        }
        $qurryString = empty($qurryString) ? array() : $qurryString;
        
        $controller = $controllerName . 'Controller';
        $dispatch = new $controller($controllerName, $action);

        if ((int)method_exists($controller, $action)) {
            call_user_func_array(array($dispatch, $action), $queryString);
         } else {
            exit($controller . "控制器不存在");
         }
    }
    function loadClass($class){
        $frameworks = FRAME_PATH . $class . '.php';
        $controllers = APP_PATH . 'app/Controllers/' . $class . '.php';
        $models = APP_PATH . 'app/Models/' . $class . '.php';

        if (file_exists($frameworks)) {
            // 載入框架核心
            include $frameworks;

        } elseif (file_exists($controllers)) {
            // 載入應用程式的控制器
            include $controllers;

        } elseif (file_exists($models)) {
            //載入應用程式的模組程式
            include $models;
        } else {
            /* 可帶入顯示錯誤訊息的程式碼 */
        }
    }
}