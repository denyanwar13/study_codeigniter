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
        echo form_open('/');
        echo form_label('Nama : ') . "<br />";
        echo form_input('nama') . "<br />";
        echo form_label('Email : ') . "<br />";
        echo form_input('email') . "<br />";
        echo form_label('Komentar : ') . "<br />";
        echo form_textarea('komentar') . "<br />";
        echo form_submit('Submit', 'Send') . "<br />";
        echo form_close();
    ?>
</body>
</html>