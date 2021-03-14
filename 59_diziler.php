<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

//diziler

$dizi=array("beyza","subasi",10,20,30,40);

//echo $dizi; //sadece dizi olduğunu söyler array bastırır

//dizi değişkenlerinin içeriğini gösterir (oklarla)
print_r($dizi);
echo "<br>";

//tek tek elemanları istersem
echo $dizi[0]; echo "<br>";
echo $dizi[1]; echo "<br>";
echo $dizi[2]; echo "<br>";
echo $dizi[3]; echo "<br>";
echo $dizi[4]; echo "<br>";


//farklı bir listeleme tekniği(okluları alt alta)
echo "<br>";
echo "<pre>";
print_r($dizi);
echo "<pre>";
echo "<br>";




?>

</body>
</html>