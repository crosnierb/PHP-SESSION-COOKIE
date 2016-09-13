<?php
session_start();
$_SESSION['name'] = "bar";
function remove_session() {
  if (isset($_SESSION['name'])) {
    echo "Session start: ".$_SESSION['name'].".<br>";
    session_unset(); //destruct the global var of the session
    echo "Session unset: ".$_SESSION['name']."<br>";
    session_destroy(); //destruct the session but not var of the session
    echo "Session destroy: ".$_SESSION['name']."<br>";
    session_start(); //start a new session and/or get value of the current session if exist
    echo "Session is deleting.".$_SESSION['name']."<br>";
    echo "Hello ".$_SESSION['name']."<br>";
  }
  else {
    echo "Session not deleting";
    return false ;
  }
}
?>
