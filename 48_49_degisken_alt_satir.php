<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

//değişkenler $ işaretiyle başlar

//string
$ad="beyza";
$soyad="subaşı";
$egitim_platformu='udemy'; //tek tırnak da olur

//int
$no=500;

//ekrana yazdırırken
echo $ad="beyza";

//değişkenleri birleştirip bastırmak istersem
echo $ad.$soyad;

//alt satıra geçme, satır atlama <br> etiketi kullanılır
 echo"<br>";
 echo "beyza";
 echo "<br>";
 echo "subaşı";

//farklı bir kullanımı
 echo "<br/>";

//birleştirme operatörüyle de alt satıra inebilirim
 echo $ad.$soyad."<br>";


  ?>


</body>
</html>