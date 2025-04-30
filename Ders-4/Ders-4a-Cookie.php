<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Değişkenler</title>
</head>

<body>

    <h3>Global Değişkenler</h3>
    <h4>$_COOKIE</h4>

    <?php
    setcookie("Test", "Aymes Bil Pro");

    $cerez = $_COOKIE['Test'];

    echo $cerez;
    echo "<br>";
    print_r($cerez);

    ?>


</body>

</html>