<?php
// 初始化一般常用的環境變數
defined('FRAME_PATH') or define('FRAME_PATH', __DIR__.'/');
defined('APP_PATH') or define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']).'/');
defined('APP_DEBUG') or define('APP_DEBUG', false);
defined('CONFIG_PATH') or define('CONFIG_PATH', APP_PATH.'config/');
defined('RUNTIME_PATH') or define('RUNTIME_PATH', APP_PATH.'tmp/');
// 包含組態設定檔案
require APP_PATH . '../config/config.php';
// 包含 MVC 核心檔案
require FRAME_PATH . '../Core.php';
// 將核心檔案類別，實例化成可用程式
$hello = new Core;
$hello->run();