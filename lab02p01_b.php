<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo "<pre>";
    // echo print_r($_GET);
    // echo "</pre>";

    if(isset($_GET['imie']) && isset($_GET['nazwisko'])) {
        if(empty($_GET['imie']) || empty($_GET['nazwisko'])) {
            echo "<h2>Jesteś zalogowany jako gość</h2>";
            exit();
        }
        $imie = $_GET['imie'];
        $nazwisko = $_GET['nazwisko'];
        echo "<h1>Witaj, $imie $nazwisko! </h1>";
    }
    else {
        echo "<a href='lab02p01_a.html'>Przejdź do formularza</a>";
    }
    ?>
</body>
</html>