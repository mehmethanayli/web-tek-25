<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dersleri</title>
</head>

<body>
    <h3>Sık Kullanılan Hazır Fonksiyonlar</h3>

    <?php

    echo $metin = "aydın adnan menderes üniversitesi ";
    $byazi = strtoupper($metin); //Yazıyıyı büyük harfe dönüştür.
    $kyazi = strtolower($byazi); //Yazıyı küçük harfe dönüştür.
    $mb_byazi = mb_strtoupper($kyazi); //Yazıyıyı büyük harfe dönüştür.
    $mb_kyazi = mb_strtolower($mb_byazi); //Yazıyı küçük harfe dönüştür.
    $ilkharf_buyuk_metin = ucfirst($mb_kyazi); //Gelen metnin ilk harfini büyütür. 
    $ilkharf_buyuk_kelime = ucwords($metin); //Gelen metinin kelimelerinin baş harflerini büyültür. 

    echo "<br>Karakter Sayısı: " . strlen($metin);
    echo "<br> Metnin Belirli Bir Karakter Sayısı: " . substr($metin, 0, 21);

    ?>


    <h4>Uygulama:</h4>
    <p> Lorem Metninin ilk 100 karakterini alın devamında bir buton
        yerleştirerek Adü web sitesine yönlendirin.</p>

    <?php
    $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Accusamus autem esse commodi porro, aspernatur consequatur cupiditate
    quae nobis? Voluptates eligendi suscipit ipsum tenetur sint. Error 
    quisquam molestiae optio nemo libero.";

    echo substr($lorem, 0, 97) . "...";
    echo '<br><a href="https://www.adu.edu.tr/" target="_blank"> Devamını Oku </a>';

    ?>


</body>

</html>