<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diziler</title>
</head>

<body>
    Diziler:
    <hr>

    <p> Dizi: Gİrilen değerleri alan veya programın çalışması ile bazı sıralı değerlerin atandığı veri tutuculardır.
        print_r(): Fonksiyonu ile okunabilir.</p>

    Kurallar:

    <ol>
        <li>Diziler array() ve [] ile tanımlanabilir.</li>
        <li>Dizi elemanlarına tanımlanacak olan anahtar isimleri içerisinde alfanumerik değerler (a-z A-Z 0-9) ve _ kullanılabilir.</li>
        <li>Dizi elemanlarına tanımlanacak olan anahtar isimleri içerisinde hiçbir zaman boşluk, türkçe karakterler veya özel karakterler kullanılamaz.</li>
        <li>Dizi elemanlarına anahtar isimleri tanımlarken, Php tarafından kullanılan isimler kullanılamaz.</li>
        <li>Dizi elemanlarına tanımlanacak olan anahtar isimleri büyük/küçük harf duyarlıdır.</li>
        <li>Dizi elemanlarına tanımlanacak olan anahtar isimleri aynı dizi içerisinde tekrar kullanılamaz.</li>
        <li>Dizi elemanlarına anahtar isimleri tanımlanmazsa, dizi elemanları için anahtar isimleri otomatik olarak 0'dan başlayarak oluşturulur.</li>
    </ol>
    Yapısı:<br>
    $dizi= array(Anahtar=> Eleman,Anahtar=> Eleman,Anahtar=> Eleman);<br>
    $dizi= array(Eleman,Eleman,Eleman);<br>

    $dizi= [Anahtar=> Eleman,Anahtar=> Eleman,Anahtar=> Eleman];<br>
    $dizi= [Anahtar=> Eleman,Anahtar=> Eleman,Anahtar=> Eleman];<br>
    <br><br><br><br><br>

    <?php

    $erkekler = array("Ali", "Ahmet", "Kemal");

    $kadinlar = ["Ayşe", "Ebru", "Elif"];

    /* Dizinin Yazdırılması */
    echo "<pre>";
    print_r($erkekler);
    echo "</pre>";

    echo "<pre>";
    print_r($kadinlar);
    echo "</pre>";

    /* Dizinin Bir Elemanının Yazdırılması: */

    echo "Erkekler Dizisindeki 1. Eleman: " . $erkekler[0] . "<br>";
    echo "Kadınlar Dizisindeki 3. Eleman: " . $kadinlar[2] . "<br>";


    /* Array Tanımlamada Key-Value İlişkisi */
    $personel = array(
        "id"        => 1,
        "name"      => "Elif Nur",
        "surname"   => "Candan",
        "graduate"  => "Aymes Bilgisayar Programcılığı"
    );
    echo "<pre>";
    print_r($personel);
    echo "</pre>";

    echo "Personelin Adı: " . $personel["name"] . "<br>";
    echo "Personelin Soyadı: " . $personel["surname"] . "<br>";

    /* Foreach Döngüsüyle Dizi İçeriğinin Yazdırılması: */
    foreach ($personel as $key => $value) {
        echo "$key - $value <br>";
    }

    ?>

    <h3>Tanımlı Diziye İçerik Ekleme</h3>

    <?php
    $degerler = [];

    echo "<pre>";
    print_r($degerler);
    echo "</pre>";

    $degerler[] = "Ocak";
    $degerler[] = "Şubat";
    $degerler[5] = "Mart";
    $degerler["key"] = "Nisan";
    $degerler[] = "Eylül";
    $degerler[3] = "Ekim";
    $degerler[3] = "Temmuz";

    echo "<pre>";
    print_r($degerler);
    echo "</pre>";
    ?>


    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br>

</body>

</html>