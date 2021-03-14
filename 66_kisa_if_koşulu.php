<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php


//KISA IF KOŞULU !!!
$sayi=801;
echo $sayi=='800' ? 'doğru' : 'yanlış';
echo "<br>";
echo "<br>";


$deger="Elma";

?>

<!-- KULLANILDIĞI YERLER  -->

<select>

	<option <?php echo $deger=='Armut' ? 'selected' : '' ?>>Armut</option> 
	<option <?php echo $deger=='Elma' ? 'selected' : '' ?>>Elma</option>
	
	<!-- deger de tuttuğum veriyi kısa ifle sorgulatıp seçili alıyorum -->

</select>



</body>
</html>