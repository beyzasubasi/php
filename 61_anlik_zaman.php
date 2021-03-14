<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php


// date_default_timezone_set('Europe/Denizli');  bu fonk u bildirmemiz lazım server ımıza konumumuzu söylememiz gerek


//DATE TIME ZONE AYARLARI VE ANLIK ZAMAN ALMA

echo $zaman=date("d-m-y h:i:s");
$sonuc=explode(" ",$zaman);

echo "<pre>";
print_r($sonuc);
echo "</pre>";

echo "<br>";

echo "TARİH: ",$sonuc[0]."SAAT: ".$sonuc[1];




?>


</body>
</html>