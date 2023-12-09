<?php

session_start();

// echo 'Ini halaman profil ' . $_COOKIE['user_name'];

if (isset($_SESSION["user_name"])) {
    echo 'Ini halaman profil ' . $_SESSION['user_name'];
} else {
    echo 'Login dulu';
}

?>

<br>

<a href="logout.php">Logout</a>