<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $date1 = "01-01-2023";
    $date2 = "31-12-2023"; 

    if ($date1 > $date2)
        echo "$date1 é mais recente que $date2";
    else 
    echo "$date1 é mais antigo que $date2";
    
    ?>
</body>
</html>