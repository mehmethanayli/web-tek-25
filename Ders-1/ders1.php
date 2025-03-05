<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dersleri</title>
</head>

<body>
    <!-- Html Açıklama Satırıdır. -->

    <?php
    // Tek satır açıklama yazmak için kullanılır.

    /* Çoklu satırlı açıklama satırı 
    oluşturmak için kullanılır. */

    // phpinfo(); /* Bu fonksiyon yüklü olan php versiyonu ve kurulu paketlerin bilgisini yazdırır. */

    echo "Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı";

    // Php içerisinde html etiketleri kullanılabilir.
    echo "<br> Aydın Adnan Menderes Üniversitesi <br> Aydın MYO Bilgisayar Programcılığı <br>";


    //Uygulama: Bir değişken tanımlama ve değişkeni ekrana yazdırma.
    $metin = "<br> Aydın Adnan Menderes Üniversitesi <br> Aydın MYO Bilgisayar Programcılığı <br>";
    echo $metin;


    //Değişken içerisindeki metinsel ifadenin büyük küçük harf dönüşümleri.
    echo $bharf = strtoupper($metin);
    echo $kharf = strtolower($bharf);

    echo $bharf2 = mb_strtoupper($metin);
    echo $kharf2 = mb_strtolower($bharf2);

    ?>





</body>

</html>