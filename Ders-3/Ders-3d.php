<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Değişkenler</title>
</head>

<body>

    <h3>Global Değişkenler</h3>
    <h4>$_FILES</h4>
    <li>Form içerisinden bir dosya gönderimi olacaksa mutlaka
        enctype="multipart/form-data"
        Form içerisinden bir dosya gönderimi olacaksa mutlaka
        ifadesinin belirtilmesi gereklidir.</li>

    <li>Dosya gönderiminde Get metodu kullanılmaz.</li><br><br>

    <form action="Ders-3d2.php" method="POST" enctype="multipart/form-data">
        <label>CV Yükleyiniz:</label>
        <input type="file" name="cv"><br>
        <input type="submit" value="Özgeçmiş Gönder">
    </form>


</body>

</html>