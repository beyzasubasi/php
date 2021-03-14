<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<?php 
	// IF UYGULAMA ÖRNEĞİ

$kadi="beyzi";
$pass="123456";

echo $_POST['kullanici_adi'];
echo $_POST['kullanici_password'];


// YENİ BAŞLAYANLAR BİR DEĞERE ATAYIP ONU BASTIRMAK İSTERLER
/*$kullanici_adi=$_POST['kullanici_adi'];
$kullanici_password=$_POST['kullanici_password'];

if($kadi==$kullanici_adi AND $pass==$kullanici_password)
{
	echo "Giriş Başarılı";
}
else
{
	echo "Başarısız Giriş Denemesi";
}
*/


//BU ŞEKİLDE IF KOŞULUNUN İÇİNE ALIRSAK DAHA PRATİK OLUR
if ($kadi==$_POST['kullanici_adi'] AND $_POST['kullanici_password']==$pass)
{
	echo "Giriş Başarılı!";
}
else
{
	echo "Başarısız Giriş Denemesi";
}

	?>

<br>
<hr>
	
	<h3>Kullanıcı Girişi</h3>
	<form action="" method="POST">
		Kullanıcı Adı <input type="text" name="kullanici_adi"placeholder="Kullanıcı Adınızı Giriniz..">
		Şifre <input type="password" name="kullanici_password" placeholder="Şifrenizi Giriniz..">

		<button type="submit">Giriş Yap</button>

	</form>



</body>
</html>