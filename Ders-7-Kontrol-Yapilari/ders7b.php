<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrol Yapıları</title>
</head>

<body>


    <h3>Switch Case Yapıları</h3>

    <?php
    $deger = 50;

    switch ($deger) {
        case ($deger < 10):
            echo "Değer 10'dan küçük";
            break;

        case ($deger < 20):
            echo "Değer 20'den küçük";
            break;

        case ($deger < 30):
            echo "Değer 30'dan küçük";
            break;

        default:
            echo "Yapacak Birşey Yokk....";
            break;
    }

    ?>


</body>

</html>