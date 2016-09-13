<?php
function modify_cookie($name, $value)
{
  $temps = 3600;
  if (isset($_COOKIE['name'])) {
    setcookie($name, $value, time() + $temps);
    echo "Cookie modify<br>";
    return true;
  }
  else {
    echo "Cookie no modify<br>";
    return false;
  }
}
?>
