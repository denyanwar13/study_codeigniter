<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: WebDev ::.</title>
</head>
<body>
    <?php
        echo heading('Hi Deny Anwar!', 3);
        echo ul(array('Berikut ini buku terbitan dari Langit Inspirasi', 'Jangan lupa miliki bukunya'));
        //  Menampilkan <img src="http://site.com/images/hacking_via_smartphone.jpg" />
        echo img('images/hacking_via_smartphone.jpg');
        echo nbs(3);
        // Menampilkan <img src="http://site.com/images/Framework_Langit_Inspirasi.jpg" />
        echo img('images/Framework_Langit_Inspirasi.jpg');
    ?>
</body>
</html>