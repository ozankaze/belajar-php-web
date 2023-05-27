<?php

header('Author: Eunha');
header('Application: Version 5.0');

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client";