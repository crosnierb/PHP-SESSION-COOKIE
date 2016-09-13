<?php
include_once("ex_04.php");

session_start();
$name = (!$_GET['name']) ? "platipus" : $_GET['name'];
if ($_GET['name'])
{
	$_SESSION['name'] = $name;
}
else if ($_SESSION['name'])
{
	$_SESSION['name'] = $_SESSION['name'];
}
else
{
	$_SESSION['name'] = $name;
}
echo "Hello ".$_SESSION['name'].".<br>";
remove_session();
?>
