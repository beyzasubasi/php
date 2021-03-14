<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<?php 

//HAZIR STRİNG FONKSİYONLAR


// strtolower: büyük harfleri küçük harflere çevirir
echo $yazi="BEN UDEMY KURSUNA KAYITLIYIM";
echo "<br>";
echo $yazi=strtolower($yazi);
echo "<hr>";


// strtoupper: küçük harfleri büyük harflere çevirir
echo $yazi="ben udemy kursuna kayitliyim";
echo "<br>";
echo $yazi=strtoupper($yazi);
echo "<hr>";


// ucwords: sözcüklerin ilk harflerini büyük yazar
echo $yazi="ben udemy kursuna kayitliyim";
echo "<br>";
echo $yazi=ucwords($yazi);
echo "<hr>";


// ucfirt: metnin ilk harfini büyük yazar
echo $yazi="ben udemy kursuna kayitliyim";
echo "<br>";
echo $yazi=ucfirst($yazi);
echo "<hr>";


// strlen:metnin karakter sayısını verir(boşluklarda dahil) 
//echo "\$yazi değişkeninde olan karakter sayısı: ".$yazi=strlen($yazi);
//echo "<hr>";


// substr:metnin belirtilen karakter sayıda kısmını yazdırır
echo $yazi=substr($yazi,0,10);
echo "<hr>";


?>


</body>
</html>