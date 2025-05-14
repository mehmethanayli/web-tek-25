<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrol Yapıları</title>
</head>

<body>


    <h3>Kontrol Yapıları</h3>

    <?php


    if (3 > 5) {
        echo "Koşul Doğru";
    } else {
        echo "Koşul Yanlış ";
    }


    echo "<h3>Farklı Kullanım Örneği</h3>";
    if (3 > 5) :
        echo "Koşul Doğru";
    else:
        echo "Koşul Yanlış ";
    endif;


    echo "<h3>Fazla Koşul Kullanım Örneği</h3>";

    if (3 > 10) {
        echo "Koşul yanlış 3>10.";
    } else if (10 > 15) {
        echo "Koşul Doğru 10>15";
    } else {
        echo "Koşulların dışında ";
    }

    echo "<h3>Saat Uygulaması</h3>";

    /* 
Saat 0-24 arasında ise aşağıdaki işlemleri yapan değilse 
saat hatalı yazan koşullu ifadeyi yazınız.
0-6 arasında her saat başı iyi geceler yazar.
6-9 arası günaydın yazar.
9-17 arası iyi günler 
17-22 arası iyi akşamlar
bunların dışında iyi geceler 


*/

    $saat = 27;
    if (0 >= $saat OR $saat <= 24) {
        if ($saat >= 0 AND $saat <= 6) {
            if ($saat == 1) {
                echo "İyi Geceler. Saat {$saat}";
            } elseif ($saat == 1) {
                echo "İyi Geceler. Saat {$saat}";
            } elseif ($saat == 2) {
                echo "İyi Geceler. Saat {$saat}";
            } elseif ($saat == 3) {
                echo "İyi Geceler. Saat {$saat}";
            } elseif ($saat == 4) {
                echo "İyi Geceler. Saat {$saat}";
            } elseif ($saat == 5) {
                echo "İyi Geceler. Saat {$saat}";
            } elseif ($saat == 6) {
                echo "İyi Geceler. Saat {$saat}";
            }
        } elseif ($saat > 6 AND $saat <= 9) {
            echo "Günaydın";
        } elseif ($saat > 9 AND $saat <= 17) {
            echo "İyi Günler";
        } elseif ($saat > 17 AND $saat <= 23) {
            echo "İyi Geceler";
        } else {
            echo "İyi Akşamlar";
        }
    } else {
        echo "Lütfen 0-24 arasında bir saat seçiniz.";
    }
    ?>


</body>

</html>