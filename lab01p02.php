<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
        href="styl01.css">
</head>

<body>
    <?php
    $od = 1;
    $do = 100;

    $liczba = mt_rand($od, $do);

    echo "<h1>Liczba: $liczba</h1>";
    ?>

</body>

</html>