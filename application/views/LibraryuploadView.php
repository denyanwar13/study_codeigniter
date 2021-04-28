<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Upload</title>
</head>
<body>
    <h2>Upload File Dengan Codeigniter</h2>
    <?php
        echo $error;
        if($data) {
    ?>
            <h3>Gambar berhasil di upload !</h3>
            <img src="../images/<?php echo $data['file_name']; ?>" width="450px">             
    <?php
        }

        echo form_open_multipart('index.php/LibraryUpload');
    ?>
        <input type="file" name="gambar">
        <button type="submit">Upload Gambar</button>
    <?php 
        echo form_close();
    ?>
</body>
</html>