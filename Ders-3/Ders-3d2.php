
<?php


$gelenDosya = $_FILES["cv"];

echo "<pre>";
print_r($gelenDosya);
echo "</pre>";


echo "Gelen Dosyanın Adı: " . $gelenDosya["name"] . "<br>";
echo "Gelen Dosyanın Mime Türü: " . $gelenDosya["type"] . "<br>";
echo "Gelen Dosyanın Temp Dizini: " . $gelenDosya["tmp_name"] . "<br>";
echo "Gelen Dosyanın Boyutu: " . $gelenDosya["size"] . "<br>";
