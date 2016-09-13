<?php
session_start();
$time = 31556926;

$name = (!$_GET['name']) ? "platipus" : $_GET['name'];

if ($_GET['name']) {
	$_SESSION['name'] = $_GET['name'];
  setcookie('name', $_SESSION['name'], time() + $time);
}
else if ($_SESSION['name']) {
	$_SESSION['name'] = $_SESSION['name'];
}
else if ($_COOKIE['name']) {
  $_SESSION['name'] = $_COOKIE['name'];
}
else {
	$_SESSION['name'] = $name;
  setcookie('name', $_SESSION['name'], time() + $time);
}
	echo 'Hello '.$_SESSION['name'].'.<br>';
?>
