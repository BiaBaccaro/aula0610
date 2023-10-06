<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Strtotime</title>
</head>
<body>
    <?php

    echo 'Proximo mes: '. date('d-m-Y', strtotime('+1 month')). "<br>";

    ?>
</body>
</html>