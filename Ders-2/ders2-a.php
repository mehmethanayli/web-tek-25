<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ders-2</title>
</head>

<body>
    <!-- 
    Değişken Tanımlama:
    1. Değişkenler $ işareti ile tanımlanır.
    2. Mutlaka bir harf veya _ işareti ile başlayabilir.
    3. Değişkenler rakamlar ile başlayamaz.
    4. Değişken içerisinde boşluk ve Türkçe karakterler kullanılmaz.
    5. Değişkenlerde büyük küçük harf duyarlılığı vardır.
    6. Programlama dili içerisinde bulunan özel tanımlar değişken ismi olarak kullanılamaz. 
    -->

    <h4>Matematiksel İfadeler</h4>
    <h5>Toplama İşlemi</h5>
    <?php
    $sayi1 = 20;    //Sayi1 değişkeni tanımlandı.
    $sayi2 = 17;    //Sayi2 değişkeni tanımlandı.
    $sonuc = $sayi1 + $sayi2;   //Toplama işlemi yapıldı.
    echo $sonuc;    //Sonuç ekrana yazdırıldı.
    echo "<br>İşlemin Sonucu: $sayi1 + $sayi2 = $sonuc"; //Sonuç ekrana yazdırıldı.

    echo "<br><br> Atamalı Toplama İşlemi:";
    $deger = 10;
    $ekdeger = 59;
    echo "<br>Sonuç: $deger + $ekdeger = " . $deger += $ekdeger;
    echo "<br>Değer Değişkeninin İçeriği: $deger";
    echo "<br>Değer Değişkeninin Yeni İçeriği:" . $deger += 123;
    echo "<br>Değer Değişkeninin Son İçeriği: $deger";
    ?>

    <h5>Çıkarma İşlemi</h5>
    <?php
    $sayi1 = 50;
    $sayi2 = 77;
    $sonuc = $sayi1 - $sayi2;
    echo $sonuc;
    echo "<br>İşlemin Sonucu: $sayi1 - $sayi2 = $sonuc";

    echo "<br><br> Atamalı İşlem:";
    $deger = 120;
    $ekdeger = 72;
    echo "<br>Sonuç: $deger - $ekdeger = " . $deger -= $ekdeger;
    echo "<br>Değer Değişkeninin İçeriği: $deger";
    echo "<br>Değer Değişkeninin Yeni İçeriği:" . $deger -= 123;
    echo "<br>Değer Değişkeninin Son İçeriği: $deger";
    ?>

    <h5>Çarpma İşlemi</h5>
    <?php
    $sayi1 = 50;
    $sayi2 = 77;
    $sonuc = $sayi1 * $sayi2;
    echo $sonuc;
    echo "<br>İşlemin Sonucu: $sayi1 * $sayi2 = $sonuc";

    echo "<br><br> Atamalı İşlem:";
    $deger = 120;
    $ekdeger = 72;
    echo "<br>Sonuç: $deger * $ekdeger = " . $deger *= $ekdeger;
    echo "<br>Değer Değişkeninin İçeriği: $deger";
    echo "<br>Değer Değişkeninin Yeni İçeriği:" . $deger *= 123;
    echo "<br>Değer Değişkeninin Son İçeriği: $deger";
    ?>

    <h5>Bölme İşlemi</h5>
    <?php
    $sayi1 = 50;
    $sayi2 = 13;
    $sonuc = $sayi1 / $sayi2;
    echo $sonuc;
    echo "<br>İşlemin Sonucu: $sayi1 / $sayi2 = $sonuc";

    echo "<br><br> Atamalı İşlem:";
    $deger = 120;
    $ekdeger = 72;
    echo "<br>Sonuç: $deger / $ekdeger = " . $deger /= $ekdeger;
    echo "<br>Değer Değişkeninin İçeriği: $deger";
    echo "<br>Değer Değişkeninin Yeni İçeriği:" . $deger /= 123;
    echo "<br>Değer Değişkeninin Son İçeriği: $deger";

    ?>

    <h5>Mod İşlemi</h5>
    <?php
    $sayi1 = 50;
    $sayi2 = 10;
    $sonuc = $sayi1 % $sayi2;
    echo $sonuc;
    echo "<br>İşlemin Sonucu: $sayi1 % $sayi2 = $sonuc";
    ?>


    <h5>Arttırma İşlemi</h5>
    <?php
    $sayi1 = 50;
    echo "<br>Arttırma İşlemi Yapıldı:" . $sayi1++;  // Bu satırda hala $sayi değerini yazacaktır fakat bir sonraki değişkeni çağırdığımız satırda değişkenin 1 arttırıldığı görüntülenecektir. Değişkenin sağında bulunan ++ ifadesi satır yorumlandıktan sonra arttırma işlemini yapar.
    echo "<br>Değişkenin Değeri:" . $sayi1;


    $sayi2 = 20;
    echo "<br>Arttırma İşlemi Yapıldı:" . ++$sayi2;;  // Değişkenin solunda bulunan ++ ifadesi değişkenin değerinin öncelikli olarak arttılmasını sağlar..
    echo "<br>Değişkenin Değeri:" . $sayi2;

    echo "<h6>Temel Uygulama Örneği</h6>";
    $sayi1 = 6;
    echo "<hr><br>" . $sayi1++;
    echo "<br>" . $sayi1++;
    echo "<br>" . $sayi1++;
    echo "<br>" . $sayi1;



    $sayi2 = 6;
    echo "<hr><br>" . ++$sayi2;
    echo "<br>" . ++$sayi2;
    echo "<br>" . ++$sayi2;

    ?>
</body>

</html>