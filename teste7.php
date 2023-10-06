<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função mktime</title>
</head>
<body>
    <?php

    $data = mktime(14,30,00,10,28,2023);
        echo date("d-m-Y", $data)."<br>";
        echo date("d-m-Y H:i", $data)."<br>";
        echo date("Y", $data)."<br>";

    ?>
</body>
</html>