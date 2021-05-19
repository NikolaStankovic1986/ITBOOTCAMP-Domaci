<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak broj 1</title>
</head>
<body>
<p>1.	Uneti 4 broja preko forme. U php fajlu ucitati ta 4 broja preko $_GET.
2.	(nastavak) Proveriti uslov da li je drugi broj veci od prvog, i četvrti od treceg. Ako uslov nije ispunjen, prikazati gresku (die).
3.	(nastavak) Ako je uslov ispunjen, izračunati 
zbir onih brojeva od prvog do drugog koji su deljivi sa 4, 
pa zbir onih brojeva od trećeg do četvrtog koji su deljivi sa 3. 
Prikazati koji je zbir veći.
<?php 

$br1 = $_GET['broj1'];
$br2 = $_GET['broj2'];
$br3 = $_GET['broj3'];
$br4 = $_GET['broj4'];
echo "<p> $br1 $br2 $br3 $br4</p>";

function izracunati (){
    global $br1, $br2, $br3, $br4;
    $zbir1=0;
    $zbir2=0;
    if($br2 > $br1 and $br4 > $br3){
        for ($i=$br1; $i<=$br2; $i++){
            if($i % 4 == 0){
                $zbir1 +=$i;
            }
        }
        for ($i=$br3; $i<=$br4; $i++){
            if($i % 3 == 0){
                $zbir2 +=$i;
            }
        }
        if($zbir1 > $zbir2){
            echo "<p> Veci je zbir 1 i iznosi $zbir1</p>";
        } else {
            echo  "<p> Veci je zbir 2 i iznosi $zbir2</p>";
        }
    } else{
        die("Greska");
    }
    
}
izracunati();


?>
</p>
</body>
</html>