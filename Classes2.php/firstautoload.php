<?php
//這是 firstAutoload.php
function firstautoload($className){
  $filename = __DIR__ . "/First/" . $className . ".php";
  if (is_readable($filename)){
    require $filename;
  }
}
//向 spl_autoload 註冊這個方法的名稱
spl_autoload_register('firstautoload');
?>