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
    $od = 0;
    $do = 100;
    $ile = 1000;
    $liczby = [];
    for ($i = 0; $i < $ile; $i++) {
        $liczby[] = mt_rand($od, $do);
    
    }
    ?>

    <?php
    $pol = 230;
    $kolumn = 25;
    $wierszy = ceil($pol / $kolumn);
    echo "<table>\n";
    for ($i = 0; $i < $wierszy; $i++) {
        echo "<tr>\n";
        for ($j = 0; $j < $kolumn; $j++) {
            echo "<td>\n";
            $index = $i * $kolumn + $j;
            if($index < $pol) {
                echo $liczby[$index];
            } else {
                echo "&nbsp;";
            }
    
            echo "</td>\n";
        }
        echo "</tr>\n";
    }




    echo "</table>\n";
    ?>

</body>

</html>