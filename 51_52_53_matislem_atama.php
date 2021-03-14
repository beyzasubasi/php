<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$numara1=50;
$numara2=13;

// TOPLAMA+ÇIKARMA+BÖLME+ÇARPMA HEPSİ AYNI


//bu şekilde toplama yapabilirim
//echo $numara1+$numara2;

//bu şekilde de yazılabilirim
echo $topla=$numara1+$numara2;

if($topla>50) //değşkeni buralarda daha rahat kullanabilirim
{
	echo "elliden büyük";
}

echo "<hr>";

echo "Toplama İşlemi";
echo "<br>";
$topla=$numara1+$numara2;
echo "$numara1 + $numara2 = $topla";
echo "<hr>";


echo "Çıkarma İşlemi";
echo "<br>";
$çıkar=$numara1-$numara2;
echo "$numara1 - $numara2 = $çıkar";
echo "<hr>";


echo "Çarpma İşlemi";
echo "<br>";
$carp=$numara1*$numara2;
echo "$numara1 * $numara2 = $topla";
echo "<hr>";


echo "Bölme İşlemi";
echo "<br>";
$bölme=$numara1/$numara2;
echo "$numara1 / $numara2 = $bölme";
echo "<hr>";


// atama işlemleri

$atama=400;

echo "\$atama değişkeninin değeri: " . $atama;
echo "<hr>";

$atama+=500;
echo "\$atama değişkeninin değeri: " . $atama;
echo "<hr>";

$atama-=500;
echo "\$atama değişkeninin değeri: " . $atama;
echo "<hr>";

$atama/=500;
echo "\$atama değişkeninin değeri: " . $atama;
echo "<hr>";

$atama*=500;
echo "\$atama değişkeninin değeri: " . $atama;
echo "<hr>";


//arttırma ve eksiltme operatörleri

$atama++;
echo "\$arttırma değişkeninin değeri: " . $atama;
echo "<hr>";

$atama--;
echo "\$eksiltme değişkeninin değeri: " . $atama;
echo "<hr>";


?>



</body>
</html>