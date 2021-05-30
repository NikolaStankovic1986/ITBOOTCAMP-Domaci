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
1.	Napraviti fajl proizvod.php koji sadrzi samo jednu funkciju koja za dato ime proizvoda, sliku, cenu i popust pravi div  (echo 😊) za prikaz svih podataka.
Div za proizvod ce biti sirine 200px, display inline-block ili float left, a sadrzi sliku (dimenzije 200x200), ispod toga naziv, ispod toga cena.
Ako je popust veci od 0, cena je obojena crveno, a prikazana je i cena sa popustom u zelenoj boji.
Ako je popust 0, prikazana je samo prava cena.
CSS nemojte inline, ali moze style u istom fajlu ako vam je lakse.

<?php 
  echo $slika = '<img src="jabuka.jpg">'."<br/>";
  echo $ime = "jabuka"."<br/>";
function proizvod($slika,$ime, $cena, $popust){
    echo "<div>";
   
    if($popust > 0){
        echo "<p class=boja1>"."Cena jabuke je ".$cena."</p>";
        $cenaSaPopustom = $cena - ($cena * $popust/100);
        echo "<p class=boja2>". "Cena jabuke sa popustom je ".$cenaSaPopustom."</p>";
    } elseif($popust == 0){
        echo "<p>".$cena."</p>";
    } 
    echo "</div>";
}
echo proizvod($slika,$ime, 20, 5);
?>



</body>
</html>