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
    if(isset($_GET['pelnoletni']))
    {
        $user = $_GET['username'];
        echo "<h2>Witaj $user</h2>";
    }
    else {
        echo "<h2>Nie jesteś pełnoletni</h2>";
    }
    ?>
</body>
</html>