<?php
session_start();

if (isset($_SESSION['count'])){
	$_SESSION['count'] = $_SESSION['count'] + 1;
} else {
	$_SESSION['count'] = 1;
}

print "目前這頁面己經被重載了 ".$_SESSION['count']. " 次";
?>