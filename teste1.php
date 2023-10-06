<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $text = "O perigo da verdade não é que computadores passem a pensar como humanos, mas sim que humanos passem a pensar como computadores";

    $length = strpos ($text, "computadores passem");

    $result = substr($text, 0, $length); 

        echo $result;
    ?>
</body>
</html>