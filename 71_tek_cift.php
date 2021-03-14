<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>


	<?php

// KULLANICIDAN ALINAN SAYI TEK Mİ ÇİFT Mİ?

	if(isset($_POST['notislemi'])){

		echo "Sayı:".$not=$_POST['not']; echo " - ";


		if($not%2)
		{
			echo "Bu sayı tektir!";
		}
		else
		{
			echo "Bu sayı çiftir!";
		}


	}

	?>

	<hr>

	<form action="" method="POST">

		Sayi Giriniz: <input type="text" name="not" placeholder="Sayi Giriniz">
		<button type="submit" name="notislemi">Sonuçlandırır</button>

	</form>




</body>
</html>