<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

//HAZIR FONKSİYONLAR


//sort: küçükten büyüğe doğru sıralar
$dizi=array(10,9,8,7,6,5,4,3,2,1);

echo "<pre>";
sort($dizi);
print_r($dizi);
echo "</pre>";



//rsort:büyükten küçüğe doğru sıralar
$dizi=array(10,9,8,7,6,5,4,3,2,1);

echo "<pre>";
sort($dizi);
print_r($dizi);
echo "</pre>";


$dizi=array("a","b","c","d");

echo "<pre>";
rsort($dizi);
print_r($dizi);
echo "</pre>";



//in_array:dizi içerisinde aradığımız değerin olup olmadığını denetler, varsa 1 değerini döndürür
$dizi=array("a","b","c","d");

echo $sonuc=in_array("a",$dizi);
if($sonuc)
{
	echo "var";
}
else
{
	echo "yok";
}


echo "<br>";
echo "<br>";

//implode dizi değerlerini birleştirmeye yarar
$dizi=array("a","b","c","d");
$sonuc=implode(" ",$dizi);        //içine ne yazarsan arasına onu koyar
echo $sonuc;



//explode: değişkeni parçalayarak dizi haline getiren fonk
echo"<br>";

$zaman="27-10-2020 14:28";
$sonuc=explode(" ",$zaman);

echo"<pre>";
print_r($sonuc);
echo "</pre>";

echo"<br>";

echo "TARİH: ".$sonuc[0]."<br>"."SAAT: ".$sonuc[1];





?>


</body>
</html>