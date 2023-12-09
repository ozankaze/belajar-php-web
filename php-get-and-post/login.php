<?php

// ---------------------
// ------- LOGIN ------- 
// ---------------------

session_start();

$user = 'seena';
$password = '1234';

if (isset($_SESSION['user_name'])) {
    header('Location: profile.php');
} else {
    if (isset($_POST['submit'])) {
        if ($_POST['nama'] == $user &&
            $_POST['password'] == $password)
        {
            // echo "Login";
    
            // cookie
            // set cookie (key, nilai, expire)
            setcookie('user_name',$_POST['nama'], time()+120);
    
            // session
            // set session [key] = nilai
            $_SESSION['user_name'] = $_POST['nama'];
    
            // Memindahkan halaman (redirect)
            header('Location: profile.php');
    
        } else {
            echo "Gagal login";
        }
    }
}

?>

<form action="login.php" method="post">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>