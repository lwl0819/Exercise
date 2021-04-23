<?php

require_once "wash.php";
require_once "plants.php";
require_once "Thirts.php";

$plant = new Plants;
$thirt = new Thirts;
$action = new Washer;
$action->dowash($plant);
$action->dowash($thirt);

?>