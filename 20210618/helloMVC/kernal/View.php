<?php
/**
* 框架核心－檢視類別
*/
class View {
  protected $variables = array();
  protected $_controller;
  protected $_action;

  function __construct($controller, $action){
    $this->_controller = $controller;
    $this->_action = $action;
  }
  
  /** 指派變數 **/
  function assign($name, $value){
    $this->variables[$name] = $value;
  }

  /** 網頁顯示 **/
  function render(){
    extract($this->variables);
    $defaultHeader = APP_PATH . 'app/views/header.php';
    $defaultFooter = APP_PATH . 'app/views/footer.php';
    $controllerHeader = APP_PATH . 'app/views/' . $this->_controller . '/header.php';
    $controllerFooter = APP_PATH . 'app/views/' . $this->_controller . '/footer.php';

    // 網頁標頭檔案
    if (file_exists($controllerHeader)) {
      include ($controllerHeader);
    } else {
      include ($defaultHeader);
    }

    // 網頁內容檔案
    include (APP_PATH . 'application/views/' . $this->_controller . '/' . $this->_action . '.php');

    // 頁尾檔案
    if (file_exists($controllerFooter)) {
      include ($controllerFooter);
    } else {
      include ($defaultFooter);
    }
  }
}