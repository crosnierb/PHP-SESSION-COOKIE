<?php
include_once("ex_06.php");
session_start();

$time = 3600;

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
  echo "Cookie name:".$_COOKIE['name']."<br>";
  remove_cookie("name");
  echo "Cookie name:".$_COOKIE['name'];
?>
