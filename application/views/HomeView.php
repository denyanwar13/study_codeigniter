<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: WebDev ::.</title>
</head>
<body>
    <h2>Welcome to website WebDev</h2>
    <p>Selamat membaca informasi yang kami sediakan</p>

    <?php 
        echo "Nama : " . $tampilData["Nama"] . "<br />";
        echo "Pekerjaan : " . $tampilData["Pekerjaan"] . "<br />";
        echo "Perusahaan : " . $tampilData["Perusahaan"] . "<br />";
        echo "Website : " . $tampilData["Website"] . "<br />";
    ?>
</body>
</html>