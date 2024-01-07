<?php

session_start();

$_SESSION["name"] = "Sen";

echo $_SESSION["name"];

session_unset();

echo $_SESSION["name"];

?>

<a href="sessionTest.php">Link test session</a>