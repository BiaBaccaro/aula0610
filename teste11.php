<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função setDate</title>
</head>
<body>
    <?php

    $data = new DateTime('28-09-2023');
    $data->setDate(2024, 12, 25);
        echo $data->format('d-m-Y H:i:s');

    ?>
</body>
</html>