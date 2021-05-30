<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    div {
        width: 200px;
        display: inline-block;
    }
    div img{
        width: 200px;
        height: 200px;
    }
    .boja1{
        color: red;
    }
    .boja2{
        color: green;
    }
    </style>
</head>
<body>
<p>2.	Napraviti stranicu proizvodi.php koja pomocu gornje funkcije pravi 3 proizvoda po zelji (birajte naziv i sliku), ali su dva proizvoda sa popustom i jedan bez. (ne mogu ciklusi, pozivate 3 puta funkciju)</p>

<?php 
  echo $slika = '<img src="jagoda.jpg">'."<br/>";
  echo $ime = "jagoda"."<br/>";
function proizvod1($slika,$ime, $cena, $popust){
    echo "<div>";
    $cenaSaPopustom = $cena - ($cena * $popust/100);
    echo "<p class=boja1>". "Cena jagode sa popustom je ".$cenaSaPopustom."</p>"."<br/>";
    echo "</div>";
}
echo proizvod1($slika,$ime, 30, 10)."<br/>";
?>
<?php 
 
function proizvod2($slika,$ime, $cena, $popust){
    echo "<div>";
    echo $slika = '<img src="tresnja.jpg">'."<br/>";
    echo $ime = "tresnja"."<br/>";
    $cenaSaPopustom = $cena - ($cena * $popust/100);
    echo "<p class=boja2>". "Cena tresnje sa popustom je ".$cenaSaPopustom."</p>";
   
    echo "</div>";
}
echo proizvod2($slika,$ime, 30, 15)."<br/>";
?>
<?php 
function proizvod3($slika,$ime){
    echo "<div>";
    echo $slika = '<img src="visnja.jpg">'."<br/>";

    echo $ime = "visnja"."<br/>";

   
    echo "</div>";
}
echo proizvod3($slika,$ime);
?>
</body>
</html>