<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

// isset(): değişken var mı yok mu 
//			boşsa yazdırmaz, bir değişken bulunuyorsa (doluysa) yazdırır

		if(isset($_POST['notislemi'])){



			$sayi=$_POST['not'];
		

			switch($sayi){

				case '5':
			echo "Pek İyi";
			break;

			case '4':
			echo "İyi";
			break;

			case '3':
			echo "Orta";
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
	}

	?>

	<hr>

	<form action="" method="POST">

		Notunuzu Giriniz! <input type="text" name="not" placeholder="Notunuzu Giriniz">
		<button type="submit" name="notislemi">Sonuçlandır</button>


	</form>



	</body>
	</html>