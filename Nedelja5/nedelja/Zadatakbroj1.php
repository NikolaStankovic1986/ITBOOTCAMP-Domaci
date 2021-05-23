<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak broj 1</title>
</head>
<body>
<p>1.	Napisati funkciju koja prikazuje paragraf sa 2 spana unutra. Prvi span ima vase ime, drugi span vase prezime. Izracunati koliko ima slova u vasem imenu i prezimenu i zatim pozvati funkciju toliko puta. (primer: Ana Slovic - paragraf se prikazuje ukupno 9 puta) </p>
<?php
$ime ="Nikola";
$prezime = "Stankovic"; 
function paragraf(){
    global $ime, $prezime;
    echo "<p><span>$ime</span> <span>$prezime</span></p>";
   
}
paragraf();

$duzinaPrvogspana = strlen($ime);
echo $duzinaPrvogspana;
$duzinaDrugogspana = strlen($prezime);
echo $duzinaDrugogspana;
$ukupnoDuzinaspana = $duzinaPrvogspana + $duzinaDrugogspana;
echo $ukupnoDuzinaspana;

for($i=1;$i<=$ukupnoDuzinaspana;$i++){
    echo paragraf();
}


?>
</body>
</html>