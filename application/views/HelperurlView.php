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
        echo base_url() . "<br />";
        echo current_url() . "<br />";
        echo anchor("http://www.akakom.ac.id","akakom.ac.id") . "<br />";
        echo anchor("http://www.langitinspirasi.co.id","langitinspirasi.co.id");
    ?>
</body>
</html>