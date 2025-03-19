<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Değişkenler</title>
</head>

<body>

    <h3>Global Değişkenler</h3>
    <h4>$_GET</h4>

    <form action="" method="GET">

        <label for="kullanici">Kullanıcı Adı: </label>
        <input type="text" name="username" id="kullanici">
        <br>
        <label for="sifre"> Şifrenizi Giriniz:</label>
        <input type="password" name="password" id="sifre">
        <br>
        <input type="submit" value="Giriş Yap">
    </form>


    <?php

    $kullanici_adi      = @$_GET["username"];
    $kullanici_sifresi  = @$_GET["password"];

    echo "Formdan Kullanıcı Adı: $kullanici_adi <br>";
    echo "Formdan Kullanıcı Şifresi: $kullanici_sifresi <br>";

    if ($kullanici_adi == "Ali" and $kullanici_sifresi == 123) {
        echo "Kullanıcı Adı ve Şifresi Doğru";
    }

    ?>



</body>

</html>