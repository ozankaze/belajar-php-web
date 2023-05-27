<?php

// 89

session_start();

if ($_SESSION['login'] != true) {
    header('Location: /belajar-php-web/session/login.php');
    exit();
}

$notif = "Hello " . $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Member</title>
</head>
<body>
    <h1> <?= $notif ?> </h1>
    <a href="/belajar-php-web/session/logout.php">Logout</a>
</body>
</html>