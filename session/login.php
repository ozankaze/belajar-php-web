<?php

// 89

session_start();

if ($_SESSION['login'] == true) {
    header('Location: /belajar-php-web/session/member.php');
    exit();
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == 'dika' && $_POST['password'] == 'dika') {
        // sukses
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'eunha';
        header('Location: /belajar-php-web/session/member.php');
        exit();
    } else {
        // gagal
        $error = "Gagal login";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    
    <?php if ($error != "") { ?>
        <h2> <?= $error ?> </h2>
    <?php } ?>

    <h1>Login</h1>
    <form action="" method="post">
        <label for=""> Username:
            <input type="text" name="username" id="">
        </label>
        <br>
        <label for=""> Password:
            <input type="password" name="password" id="">
        </label>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

