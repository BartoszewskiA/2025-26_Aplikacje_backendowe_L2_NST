<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        $delta = $b*$b - 4*$a*$c;
        echo "delta = $delta";
    }
    ?>
</body>
</html>