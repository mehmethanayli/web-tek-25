<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Değişkenler</title>
</head>

<body>

    <h3>Global Değişkenler</h3>
    <h4>$_SESSION</h4>

    <?php
    $_SESSION["aymes"] = "Aydin Meslek Yuksekokulu";


    echo "Aymes Session Değeri İçerisindeki Veri:" . $_SESSION["aymes"];

    ?>


</body>

</html>