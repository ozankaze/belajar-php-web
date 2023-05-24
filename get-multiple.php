<?php

$say = "Hello " . $_GET['first_name'] . " " . $_GET['last_name'];

?>

<!DOCTYPE html>
<head>
    <title>$_GET</title>
</head>
<body>
    <h1><?= $say ?></h1>
</body>
</html>