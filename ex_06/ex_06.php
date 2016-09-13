<?php
function remove_cookie($var) {

	if (isset($_COOKIE['name'])) {
		unset($_COOKIE["name"]);
		setcookie("name", NULL, time()-3600);
		echo "Cookie deleting<br>";
		return true;
	}
	else {
		echo "Cookie no deleting<br>";
		return false;
	}
}
?>
