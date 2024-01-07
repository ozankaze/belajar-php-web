<?php

session_start();

$_SESSION["name"] = "Sen";
$_SESSION["age"] = 23;
$_SESSION["pass"] = "qweasd123";


$_SESSION["name"] = "Hala";
$_SESSION["age"] = 26;
$_SESSION["pass"] = "zzzzz";

echo $_SESSION["name"];
echo "<br>";
echo $_SESSION["age"];
echo "<br>";
echo $_SESSION["pass"];
echo "<br>";

?>

<a href="sessionProfil.php">Link test session</a>