<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

//HAZIR FONKSİYONLAR


//rand belirlenen aralıkta random sayı üretir 
echo rand(0,10);


//KAZANDI KAYBETTİ OYUNU
 echo $sayi=rand(0,10);
 echo "<br>";

 if($sayi>=5)
 {
 	echo "Kazandın!";
 }
 else
 {
 	echo "Kaybettin dostum";
 }


?>



</body>
</html>