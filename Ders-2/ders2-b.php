<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=,, initial-scale=1.0">
    <title>Ders-2</title>
</head>

<body>
    <!-- 
    ceil    : Herhangi bir ondalıklı sayıyı yukarı yuvarlamak için kullanılır.
    floor   : Herhangi bir ondalıklı sayıyı aşağı yuvarlamak için kullanılır. 
    round   : Herhangi bir ondalıklı sayıyı en yakına yuvarlamak için kullanılır.
    -->

    <h5>Ceil İşlemi</h5>
    <?php
    $sayi1 = 14.28563;
    echo "Sonuç= " . ceil($sayi1);
    echo " <br>\$sayi1 değişkeninin değeri $sayi1 yukarı yuvarlama işlemi sonucu: " . ceil($sayi1);
    ?>

    <h5>Floor İşlemi</h5>
    <?php
    $sayi1 = 24.98563;
    echo "Sonuç= " . floor($sayi1);
    ?>

    <h5>Round İşlemi</h5>
    <?php
    $sayi1 = 57.323;
    echo " <br>\$sayi1 değişkeninin değeri $sayi1 Round işlemi sonucu: " . round($sayi1);

    $sayi1 = 57.523;
    echo " <br>\$sayi1 değişkeninin değeri $sayi1 Round işlemi sonucu: " . round($sayi1);

    echo "<hr><br> İlk iki hanenin sabit tutularak 3. haneye göre round işleminin uygulanması: ";
    $sayi1 = 57.3239;
    echo " <br>\$sayi1 değişkeninin değeri $sayi1 Round işlemi sonucu: " . round($sayi1, 2);

    $sayi1 = 57.3298;
    echo " <br>\$sayi1 değişkeninin değeri $sayi1 Round işlemi sonucu: " . round($sayi1, 2);


    echo "<hr><br> Virgülden öncesi için örnek yuvarlama uygulamaları: ";
    $sayi1 = 257.323955;
    echo " <br>\$sayi1 değişkeninin değeri $sayi1 Round işlemi sonucu: " . round($sayi1, -1);

    $sayi1 = 557.329855;
    echo " <br>\$sayi1 değişkeninin değeri $sayi1 Round işlemi sonucu: " . round($sayi1, -2);
    ?>


    <h5>Number Format İşlemi</h5>
    <?php
    $sayi1 = 95450.28563;
    echo " <br>\$sayi1 değişkeninin değeri $sayi1 işlemi sonucu: " . number_format($sayi1) . " TL";
    echo " <br>\$sayi1 değişkeninin değeri $sayi1 işlemi sonucu: " . number_format($sayi1, 2) . " TL";
    echo " <br>\$sayi1 değişkeninin değeri $sayi1 işlemi sonucu: " . number_format($sayi1, 2, ",", ".") . " TL";
    echo " <br>\$sayi1 değişkeninin değeri $sayi1 işlemi sonucu: " . number_format($sayi1, 0, ",", ".") . " TL";

    ?>

</body>

</html>