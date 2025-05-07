<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizi Metotları</title>
</head>

<body>
    Dizilerde Metotlar:

    <hr>

    Metotlar:
    <ul>
        <li> count() : Dizi içerisindeki eleman sayısını bulmak için kullanılır.
            <br>
            COUNT_RECURSIVE : Tüm boyutlar içerisindeki elemanlar da sayma işlemine dahil edilir.
        </li>
        <li>sizeof() : Dizi içerisindeki eleman sayısını bulmak için kullanılır.</li>
        <li> array_unshift() : Dizinin en başına yeni eleman veya elemanlar eklemek için kullanılır.Aynı zamanda eklenecek olan eleman/elemanların dizye dahil edilmesiyle dizi içeriğinin toplam eleman sayısını geriye döndürür.</li>
        <li> array_push() : Dizinin en sonuna yeni eleman veya elemanlar eklemek için kullanılır.Aynı zamanda eklenecek olan eleman/elemanların diziye dahil edilmesiyle dizi içeriğinin toplam eleman sayısını geriye döndürür.</li>
        <li>array_shift : Dizinin içerisindeki ilk elemanı siler ve sildiği elemanı geriye döndürebilir. Anahtrarlar yeniden sıralanır.</li>
        <li> array_pop : Dizinin içerisindeki son elemanı siler ve sildiği elemanı geriye döndürebilir. Sonran silindiğinde anahtar değerleri değiştirilmez.</li>

        <li>key() : Dizinin göstericisi konumundaki elemanın anahtarını bulmak için kullanılır.</li>

        <li> explode() : Düz bir metni belirtilecek olan ayraca göre parçalayarak yeni bir dizi oluşturmak için kullanılır.</li>
        <li>implode() : Diziyi birleştirerek düz bir metin oluşturmak için kullanılır.</li>
        <li>array_merge() : Birden fazla diziyi birleştirmek için kullanılır.</li>
        <li>array_merge_recursive() : Birden fazla diziyi birleştirmek için kullanılır.</li>
        <li>array_combine() : İlk dizinin elemanları anahtar olarak kabul edilerek ikinci dizi ile birleştirir.</li>
    </ul>


    <br><br>
    <p>************************************************************************</p>
    <h5>Dizilerde Eleman Sayıları</h5>
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

    echo "Dizinin Eleman Sayısı: " . count($degerler) . "<br>";
    echo "Dizinin Eleman Sayısı: " . sizeof($degerler) . "<br>";
    echo "Dizinin İçerisindeki Alt Dizinin Eleman Sayısı: " . count($degerler[7][1]) . "<br>";
    echo "Dizinin Alt Boyutları Dahil Tüm Eleman Sayısı:" . count($degerler, COUNT_RECURSIVE) . "<br>";
    ?>
    <br><br>
    <p>************************************************************************</p>
    <h5>Dizinin Başına Eleman Ekleme </h5>
    <?php
    $isimler = array("Ali", "Ahmet", "Ayşe", "Huriye");
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $yeni_eleman_sayisi = array_unshift($isimler, "Aynur", "Kerim");
    echo "Ekleme Yapıldı, Yeni Dizinin Eleman Sayısı: $yeni_eleman_sayisi <br>";
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    ?>

    <br><br>
    <p>************************************************************************</p>
    <h5>Dizinin Sonuna Eleman Ekleme </h5>
    <?php
    $isimler = array("Ali", "Ahmet", "Ayşe", "Huriye");
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $yeni_eleman_sayisi = array_push($isimler, "Aynur", "Kerim");
    echo "Ekleme Yapıldı, Yeni Dizinin Eleman Sayısı: $yeni_eleman_sayisi <br>";
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    ?>


    <br><br>
    <p>************************************************************************</p>
    <h5>Dizinin Başından Eleman Çıkarma </h5>

    <?php

    $isimler = array("Ali", "Ahmet", "Ayşe", "Huriye", "Aynur", "Kerim");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    echo "Diziden Kaldırılan 1. Eleman: " . array_shift($isimler) . "<br>";
    echo "Diziden Kaldırılan 2. Eleman: " . array_shift($isimler) . "<br>";
    echo "Diziden Kaldırılan 3. Eleman: " . array_shift($isimler) . "<br>";


    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
    ?>

    <br><br>
    <p>************************************************************************</p>
    <h5>Dizinin Sonundan Eleman Çıkarma </h5>

    <?php

    $isimler = array("Ali", "Ahmet", "Ayşe", "Huriye", "Aynur", "Kerim");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    echo "Diziden Kaldırılan 1. Eleman: " . array_pop($isimler) . "<br>";
    echo "Diziden Kaldırılan 2. Eleman: " . array_pop($isimler) . "<br>";
    echo "Diziden Kaldırılan 3. Eleman: " . array_pop($isimler) . "<br>";


    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
    ?>


    <br><br>
    <p>************************************************************************</p>
    <h5>Dizinin Key Değerleri</h5>
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
        "A101" => "A101"
    );
    echo "<pre>";
    print_r($market);
    echo "</pre>";

    echo key($market);
    ?>


    <br><br>
    <p>************************************************************************</p>
    <h5>Dizilerde Explode İşlemi</h5>
    <?php

    echo $pizza = "dilim-1, dilim-2, dilim-3, dilim-4";
    $dizi = explode(",", $pizza);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";


    /*Şartlı diziye dönüştürme*/

    echo $takimlar = "Fener,Galata,Beşiktaş,Ankara Gücü, Eskişehir Spor, Akhisar Spor";
    $yeniDizi = explode(",", $takimlar, 3); //Toplamda 3 eleman olacak şekilde böler.

    echo "<pre>";
    print_r($yeniDizi);
    echo "</pre>";
    echo "<br><br>";


    /*Şartlı diziye dönüştürme*/

    echo $takimlar = "Fener,Galata,Beşiktaş,Ankara Gücü, Eskişehir Spor, Akhisar Spor";
    $yeniDizi = explode(",", $takimlar, -3); //Belirtilen sayı kadar sondan elemanı siler.

    echo "<pre>";
    print_r($yeniDizi);
    echo "</pre>";
    echo "<br><br>";

    ?>

    <br><br>
    <p>************************************************************************</p>
    <h5>Dizilerde Implode</h5>
    <hr>
    <?php

    $isimler = array("Mehmet", "Arif", "Hakkı", "Selim", "Kadir");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    echo $metin = implode(" , ", $isimler);

    ?>

    <br><br>
    <p>************************************************************************</p>
    <h5>Dizi Birleştirmek</h5>
    <hr>

    <?php

    $dizi1 = array("Mehmet", "Arif", "Hakkı", "Selim", "Nurhan", "Kadir");
    $dizi2 = array("Ayşe", "Atiye", "Hanife");

    $yeniDizi = array_merge($dizi1, $dizi2);
    echo "<pre>";
    print_r($yeniDizi);
    echo "</pre>";

    echo "Anahtarlı Birleştirme İşlemleri";

    $dizi1 = array("a1" => "Mehmet", "a2" => "Arif", "a3" => "Hakkı", "Selim", "Nurhan", "Kadir");
    $dizi2 = array("a1" => "Ayşe", "Atiye", "Hanife"); // aynı anahtarlı değerlerin sonuncusu kullanılır.
    $yeniDizi = array_merge($dizi1, $dizi2);
    echo "<pre>";
    print_r($yeniDizi);
    echo "</pre>";



    echo "array_merge_recursive() Birleştirme İşlemleri";


    $dizi1 = array("Mehmet", "Arif", "Hakkı", "Selim", "Nurhan", "Kadir");
    $dizi2 = array("Ayşe", "Atiye", "Hanife");

    $yeniDizi = array_merge_recursive($dizi1, $dizi2);
    echo "<pre>";
    print_r($yeniDizi);
    echo "</pre>";




    $dizi1 = array("a1" => "Mehmet", "a2" => "Arif", "a3" => "Hakkı", "Selim", "Nurhan", "Kadir");
    $dizi2 = array("a1" => "Ayşe", "a2" => "Atiye", "Hanife"); // aynı anahtarlı değerleri kullanıldığında çok boyutlu bir diziye çevirir.
    $yeniDizi = array_merge_recursive($dizi1, $dizi2);
    echo "<pre>";
    print_r($yeniDizi);
    echo "</pre>";

    ?>


    <br><br>
    <p>************************************************************************</p>
    <h3>Dizi İlişkisel Olarak Birleştirmek</h3>
    <hr>

    <?php
    $dizi1 = ["Mavi", "Yeşil", "Siyah", "Kırmızı"];
    $dizi2 = ["araba", "Gemi", "motor", "Kamyon"];

    $yeniDizi = array_combine($dizi1, $dizi2); //İlişkisel birleştirme gerçekleştirir.

    echo "<pre>";
    print_r($yeniDizi);
    echo "</pre>";

    echo "Anahtarlı İlişkisel Birleştirme İşlemleri"; //Dizinin kendi anahtarlarını önemsemez.

    $dizi1 = ["a1" => "Mavi", "a2" => "Yeşil", "a3" => "Siyah", "a4" => "Kırmızı"];
    $dizi2 = ["a1" => "araba", "a2" => "Gemi", "a3" => "motor", "a4" => "Kamyon"];

    $yeniDizi = array_combine($dizi1, $dizi2); //İlişkisel birleştirme gerçekleştirir.

    echo "<pre>";
    print_r($yeniDizi);
    echo "</pre>";




    echo "Çok Boyutlu Dizilerde İlişkisel Birleştirme İşlemleri"; //Dizinin kendi anahtarlarını önemsemez.

    $dizi1 = ["Araçlar", "Eşyalar", "İsimler"];
    $dizi2 = [["a1" => "araba", "a2" => "ucak", "a2" => "gemi"], "b1" => "masa", ["c1" => "ali", "c2" => "Ahmet", "c3" => "Ayşe"]]; //iç dizilerdeki anahtar değerleri korunur.

    $yeniDizi = array_combine($dizi1, $dizi2);
    echo "<pre>";
    print_r($yeniDizi);
    echo "</pre>";
    ?>


    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>