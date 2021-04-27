<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: Test Library Input ::.</title>
</head>
<body>
<?php
    echo "<h2>Form Komentar</h2>
          <form method='POST'>
            <label for='nama'>Nama :</label><br />
            <input type='text' name='nama' id='nama'><br />
            
            <label for='email'>Email :</label><br />
            <input type='text' name='email' id='email'><br />

            <label for='komentar'>Komentar :</label><br />
            <textarea name='komentar' id='komentar'></textarea><br />

            <button type='Submit'>Send</button>
          </form>
          <hr>
          <h2>Komentar Anda</h2>";

    if (isset($_POST['nama'])) {
        echo "Nama : " . $_POST['nama'] . "<br />";
    } else {
        echo "Nama : <br />";
    }

    if (isset($_POST['email'])) {
        echo "Email : " . $_POST['email'] . "<br />";
    } else {
        echo "Email : <br />";
    }

    if (isset($_POST['komentar'])) {
        echo "Komentar : " . $_POST['komentar'] . "<br />";
    } else {
        echo "Komentar : <br />";
    }
?>
</body>
</html>