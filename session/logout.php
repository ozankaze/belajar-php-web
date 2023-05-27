<?php

// 89

session_start();
session_destroy();

header('Location: /belajar-php-web/session/login.php');
exit();