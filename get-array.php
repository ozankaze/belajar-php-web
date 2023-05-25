<?php

$numbers = $_GET['numbers'];
$total = 0;

foreach ($numbers as $number) {
    // $total += $number;
    $total = $total + $number;
}

?>

<!DOCTYPE html>
<head>
    <title>$_GET</title>
</head>
<body>
    <h1><?= $total ?></h1>
</body>
</html>