<?php

// 118

if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {
    // echo 'Success';
    header('Content-Disposition: attachment; filename="profile.jpg"');
    readfile('assets/profilejpg');
    exit();
} else {
    echo 'Invalid link';
}

?>