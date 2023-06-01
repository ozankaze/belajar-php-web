<?php

// 109

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $file_name = $_FILES['upload_file']['name'];
    $file_type = $_FILES['upload_file']['type'];
    $file_size = $_FILES['upload_file']['size'];
    $file_tmp_name = $_FILES['upload_file']['tmp_name'];
    $file_error = $_FILES['upload_file']['error'];

    if ($file_error == 0) {
        
        if ($file_size < 1000000) {
            
            if ($file_type == 'image/jpeg') {
                move_uploaded_file($file_tmp_name, "assets/" . $file_name);
                echo 'Berhasil';
            } else {
                echo 'Format harus JPG';
            }

        } else {
            echo 'File kegedean';
        }

    } else {
        echo 'Ada error';
    }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload</title>
</head>
<body>
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
        <h1>Upload File</h1>
        <table>
            <tr>
                <td>File: Name</td>
                <td><?= $file_name ?></td>
            </tr>
            <tr>
                <td>File: Type</td>
                <td><?= $file_type ?></td>
            </tr>
            <tr>
                <td>File: Size</td>
                <td><?= $file_size ?></td>
            </tr>
            <tr>
                <td>File: Tmp Name</td>
                <td><?= $file_tmp_name ?></td>
            </tr>
            <tr>
                <td>File: Error</td>
                <td><?= $file_error ?></td>
            </tr>
        </table>
    <?php } ?>

    <h1>Form Upload</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <label> File
        <input type="file" name="upload_file">
    </label>
    <input type="submit" name="upload_file" value="upload">
    </form>
</body>
</html>