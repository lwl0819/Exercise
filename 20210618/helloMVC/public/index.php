<?php
use kernal\Kernal;

// 設定應用程式目錄為當前目錄
define('APP_PATH', __DIR__.'/../');
// 開啟除錯模式
define('APP_DEBUG', true);
// 載入框架
require(APP_PATH.'kernal/kernal.php');
//產生實列化物件
(new Kernal())->run();