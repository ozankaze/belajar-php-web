<?php

if (isset($_POST["submit"])) {

    // print_r($_FILES["images"]);
    
    $nameFile   = $_FILES["images"]["name"];
    $locFile    = $_FILES["images"]["tmp_name"];
    $error      = $_FILES["images"]["error"];
    $size       = $_FILES["images"]["size"];
    $format     = $_FILES["images"]["type"];
    $namaFolder = "upload/" . $nameFile;
    $time       = time();

    if ($error == "0") {
        
        if ($size < 1000000) {

            if ($format == "image/jpeg") {

                if (file_exists($namaFolder)) {
                    // upload/matthias-kinsella-9e4pCscLDyY.jpg
                    // die($namaFolder);

                    $a = str_replace(".jpg","", $namaFolder);
                    // upload/01
                    // die($a);

                    $b = $a . "_" . $time . ".jpg";
                    // upload/01_1702122285.jpg
                    // die($b);
                }

                move_uploaded_file($locFile, $namaFolder);

                //move_uploaded_file(lokasi_file, "folder" . $nama_file)
                // move_uploaded_file($locFile, "upload/" . $nameFile);

                echo "berhasil";
            } else {
                echo "Format file harus JPG";
            }

        } else {
            echo "Size kegedean";
        }

    } else {
        echo "Ada error";
    }
    
}

?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="images">
    <input type="submit" name="submit" value="Upload">
</form>