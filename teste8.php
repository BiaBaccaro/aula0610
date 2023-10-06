<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função datetime</title>
</head>
<body>
    <?php

    $atual = new DateTime();
    $especifica = new DateTime(' 1990-01-22');
    $texto = new DateTime(' +1 month');

    print_r($atual);
    print_r($especifica);
    print_r($texto);

    ?>
</body>
</html>