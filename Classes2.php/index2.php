<?php
//又修改了　index.php
include_once __DIR__ . "/allautoload.php";
$first = new First();
$first->doSomething();

$second = new Second();
$second->doSomething();
?>