<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<?php

//POST METODU

/*echo $_POST['ad'];     // ad soyadı ekrana bastırdı
echo "<br>";
echo $_POST['soyad'];
*/    //POST YERİNE GET YAZARAK O METODU GÖSTERDİM AŞAĞIDA


//GET METODU

echo $_GET['ad'];     
echo "<br>";
echo $_GET['soyad'];



?>

<form action="" method="GET">
	Ad <input type="text" name="ad" placeholder="Adınızı Giriniz..">
	SoyAd <input type="text" name="soyad" placeholder="Soy Adınızı Giriniz..">
	<input type="submit" value="Formu Gönder.." name="">
</form>


</body>
</html>