<?php
$session_loggedin = isset($_SESSION['loggedin']) ? $_SESSION['loggedin'] : FALSE;
$cookie_loggedin = isset($_SESSION['Loggedin']) ? $_SESSION['Loggedin'] : FALSE;

if ($loggedin == TRUE || $cookie_loggedin == TRUE) {

  header("Location: http://www.google.com");
  exit();
}

?>
