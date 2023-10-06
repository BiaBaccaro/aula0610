<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Time</title>
</head>
<body>
    <?php

    $nextWeek = time() + (7 * 24 * 60 * 60);
    echo 'Now        '. date('d-m-Y') ."<br>";
    echo 'Next Week: '. date('d-m-Y', $nextWeek) ."<br>";
    echo 'Next Week: '. date('d-m-Y', strtotime('+1 week')) ."<br>";

    ?>
</body>
</html>