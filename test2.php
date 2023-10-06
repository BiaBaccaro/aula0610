<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    findZero('01234'); 

    function findZero($numberString) {
        if (strstr($numberString, '0', true)) {
            echo 'Encontrado o zero';
        } else {
            echo 'Não encontrado o zero';
        }
    }

    ?>
</body>
</html>