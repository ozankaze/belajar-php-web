<?php

session_start();

$_SESSION["name"] = "Zaen";

echo $_SESSION["name"];

session_destroy();

?>