<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

//HABER SİTESİNİN DEVAMINI OKU UYGULAMASI

$yazi="Then, they heard a loud noise coming from a cupboard in the corner of the room. “What’s that?” Amy was frightened. “I didn’t hear anything,” said Kamal. Something was making strange noises. There was something inside the cupboard. “Oh no! What is it?” Amy was very frightened now. “What do you mean? There’s nothing there!” Kamal was trying not to smile. Suddenly the door opened with a bang and a zombie appeared, shouting and moving its arms. Amy screamed and covered her eyes. “Oh very funny, Grant!” said Tara looking bored. Kamal and Grant started laughing. “Ha ha, you were frightened!” said Grant. Do you like my zombie costume?” Amy took Tara’s arm. “I can’t breathe,” she said. Kamal looked worried now. “Is she OK? It was only a joke.” “No she’s not OK, you idiot. She’s having an asthma attack and she forgot her inhaler.” Tara took out her phone. “I’m calling her dad.”";

echo "<h1>Haber Başlığı</h1>";

$okuma=$_GET["okuma"];
if($okuma == "devami"){

echo "<p>".$yazi."</p>";
echo "<a href='58_haber_sitesi_örn.php?okuma=kisalt'>Kısalt</a>";
}
else{
echo "<p>".substr($yazi,0,100)."</p>";
echo "<a href='58_haber_sitesi_örn.php?okuma=devami'>Devamını Oku</a>";
}
















?>


</body>
</html>