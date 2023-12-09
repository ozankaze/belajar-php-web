<?php

session_start();

$logout = session_destroy();

if (isset($logout) == true) {
    header("Location: login.php");
}

?>