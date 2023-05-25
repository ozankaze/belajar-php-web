<?php

// $say = "Hello " . $_GET['name'];
$say = "Hello " . htmlspecialchars($_GET['name']);

?>

<!DOCTYPE html>
<head>
    <title>$_GET</title>
</head>
<body>
    <h1><?= $say ?></h1>
</body>
</html>

<!-- XSS (Cross-site scripting)

http://localhost/belajar-php-web/get.php?name=Cherli%3C/h1%3E%3Cscript%3Ealert(%22Anda%20di%20Hack%22)%3C/script%3E%3Ch1%3EBring%20lagi

-->