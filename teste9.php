<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatanto datetime com a função Format</title>
</head>
<body>
    <?php

    $atual = new DateTime();
    $especifica = new DateTime(' 1990-01-22');
    $texto = new DateTime(' +1 month');

    echo $atual->format('d-m-Y H:i:s' );
    ?><br /><?php
    echo $especifica ->format(' 1990-01-22');
    ?><br /><?php
    echo $texto->format('d-m-Y H:i:s' );

    ?>
</body>
</html>