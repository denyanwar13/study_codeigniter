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
        echo "Ukuran KB :" . byte_format(456789) . "<br />"; 
        echo "Ukuran MB :" .byte_format(3456789). "<br />"; 
        echo "Ukuran GB :" .byte_format(12345678912345). "<br />"; 
        echo "Ukuran TB :" .byte_format(123456789123456789). "<br />"; 
    ?>
</body>
</html>