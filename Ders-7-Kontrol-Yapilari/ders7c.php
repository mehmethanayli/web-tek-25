<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Döngü Yapıları</title>
</head>

<body>


    Döngüler:
    <hr>
    <p>************************************************************************</p>
    <h3> While Döngüsü</h3>
    <hr>
    <?php
    $basla = 1;

    while ($basla <= 10) {
        echo "Tur: $basla";
        $basla++;
    }

    ?>




    <br><br>
    <p>************************************************************************</p>
    <h3> Do-While Döngüsü</h3>
    <hr>

    <?php

    $basla = 1;

    do {
        echo "Tur: $basla";
        $basla++;
    } while ($basla <= 10);

    ?>


    <br><br>
    <p>************************************************************************</p>
    <h3> For Döngüsü</h3>
    <hr>

    <?php

    $basla = 1;

    while ($basla <= 10) {
        echo "While Tur: $basla <br>";
        $basla++;
    }



    for ($i = 1; $i <= 10; $i++) {
        echo "For Tur: $i <br>";
    }

    ?>

    <br><br>
    <p>************************************************************************</p>
    <h3> Foreach Döngüsü</h3>
    <hr>

    <?php

    $dizi1 = ["mavi", "yesil", "mor", "sarı", "siyah", "beyaz", "mavi"];

    foreach ($dizi1 as $key => $value) {
        echo "anahtar: $key --- değer: $value <br>";
    }

    foreach ($dizi1 as $value) {
        echo "değer: $value <br>";
    }



    ?>


</body>

</html>