<?php

if(!isset($_GET['name']) || $_GET['name'] == "" ) {
    http_response_code(400);
    echo "Name is required";
    exit();
}

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