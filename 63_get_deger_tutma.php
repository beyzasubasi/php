<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<?php

echo $_GET['ad'];     
echo "<br>";
echo $_GET['soyad'];


?>


<form action="63_tutulan_deger.php" method="GET">

	Ad <input type="text" name="ad" placeholder="Adınızı Giriniz..">
	SoyAd <input type="text" name="soyad" placeholder="Soy Adınızı Giriniz..">
	<input type="submit" value="Formu Gönder.." name="">
	
</form>


</body>
</html>
