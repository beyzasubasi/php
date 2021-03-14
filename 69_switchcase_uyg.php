<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<?php

/* 5lik sistem öğrencinin not durumunu yazan uygulamayı yapalım

1=Kaldınız
2=Geçtiniz
3=Ortalama
4=İyi
5=Pek İyi      */

if(isset($_POST['Notunuz']))
{
	echo "Notunuz:".$not=$_POST['not']; echo" ";

	switch($not){

		case '5':
		echo "Pek İyi";
		break;

		case '4':
		echo "İyi";
		break;

		case '3':
		echo "Geçer";
		break;

		case '2':
		echo "Geçer";
		break;

		case '1':
		echo "Kaldı";
		break;

		default:
		echo "Tanımsız Sonuç";
		break;  
	}

	echo "<hr>";
}

?>

<form action="" method="post">

	Notunuzu Giriniz! <input type="number" max="5" name="not">
	<input type="submit" name="notunuz">
</form>



</body>
</html>