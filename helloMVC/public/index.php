<?php
use Kernel\Kernel;

define ('APP_PATH', __DIR__.'../');

define ('APP_DEBUG', true);

require (APP_PATH.'Kernel/Kernel.php');

(new Kernel())->run();
?>