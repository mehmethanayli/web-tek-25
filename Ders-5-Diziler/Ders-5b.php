<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diziler</title>
</head>

<body>
    Çok Boyutlu Diziler:
    <hr>

    <?php
    $degerler = array(
        "Ocak",
        "Şubat",
        "Mart",
        array(
            "Pazartesi",
            "Salı",
            "Çarşamba",
            "Perşembe"
        ),
        "Nisan",
        "Mayıs",
        "Haziran",
        array(
            "Cuma",
            array(
                "sabah",
                "öğle",
                "akşam"
            ),
            "Cumartesi",
            "Pazar"
        )
    );
    echo "<pre>";
    print_r($degerler);
    echo "</pre>";

    echo "1. Boyuttaki Elemana Erişim: " . $degerler[0] . "<br>";
    echo "1. Boyuttaki Elemana Erişim: " . $degerler[2] . "<br>";
    echo "2. Boyuttaki Elemana Erişim: " . $degerler[3][2] . "<br>";
    echo "2. Boyuttaki Elemana Erişim: " . $degerler[7][0] . "<br>";
    echo "3. Boyuttaki Elemana Erişim: " . $degerler[7][1][0] . "<br>";
    echo "3. Boyuttaki Elemana Erişim: " . $degerler[7][1][1] . "<br>";
    echo "3. Boyuttaki Elemana Erişim: " . $degerler[7][1][2] . "<br>";

    ?>

    Çok Boyutlu Karmaşık Dizi Örneği:
    <hr>

    <?php
    $market = array(
        "bim" => "BİM",
        "BimSubeler" => array(
            "İzmir",
            "Manisa",
            "Aydın",
            "ilce" => array(
                "Efeler",
                "semt1" => array(
                    "Girne" => array(1, 2, 3, 4),
                    "Zafer" => array(1, 2, 3, 4)
                ),
                "Nazilli",
                "semt2" => array(
                    "uzuncarsi",
                    "yesil"
                )
            )
        ),
        "A101" => "A101",
        "A101Subeler" => array(
            "İzmir",
            "Manisa",
            "Aydın",
            "ilce" => array(
                "Girne",
                "MimarSinan"
            )
        ),
        "Pekdemir" => "Pekdemir",
        "PekdemirSubeler" => array(
            "İzmir",
            "Manisa",
            "Aydın",
            "ilce" => array(
                "Girne",
                "MimarSinan"
            )
        )
    );

    echo "<pre>";
    print_r($market);
    echo "</pre>";

    echo $market["BimSubeler"]["ilce"]["semt1"]["Girne"][3];

    ?>


    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br>

</body>

</html>