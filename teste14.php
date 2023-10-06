<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função setTimezone</title>
</head>
<body>

    <?php

    $fuso = new DateTimeZone(' America/New_York');
     $data = new DateTime('28-09-2023');
    $data->setTimezone($fuso);
        echo $data->format('d-m-Y H:i:s');
    ?>
</body>
</html>