<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função setTime</title>
</head>
<body>
    <?php

    $data = new DateTime('22-01-1990');
    $data->setTime(9, 15, 44);
        echo $data->format('d-m-Y H:i:s');

    ?>
</body>
</html>