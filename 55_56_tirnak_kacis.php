<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

//çift(" ") ve tek(' ') tırnak arasındaki fark
$ad="Beyzi";
$soyad="Subaşı";


// (" ")içerisinde değişken içerikleri okunabilir-değişken kullanılabilir
echo "Benim Adım $ad";
echo "<br>";


// (' ')içerisinde değişken içerikleri okunmaz-değişken kullanılmaz
echo 'Benim Adım $ad';
echo "<br>";


//kaçış işaretleri: mesela tırnak içinde yazdırmak istiyorum ama tırnağı farklı algıladığı için yazamıyorum bu defa \"   \" ifadesini kullanarak -sen bunları dikkate alma- demiş olurum

//herhangi bir değişkeni öldürmek için de kullanılır örn: \$ad yazdığımda adın içeriğini yazdırmaz direkt ad ı ekrana basar

echo "Ben $ad \"Udemy\" Kursuna kayıt oldum";



?>

</body>
</html>




