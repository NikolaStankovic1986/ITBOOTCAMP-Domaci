<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak broj 2</title>
    <style>
    div {
        border: 1px solid black;
    }
    </style>
</head>
<body>
    <p>2.	Napraviti dva slucajna broja $n i $x u opsegu od 1-10. Prikazati ih.
Napisati funkciju koja pravi i prikazuje "n" span elemenata. Svaki span ima text Ovo je span 1, Ovo je span 2… 
Napraviti "x" divova, pri cemu svaki div dobija "n" spnova pozivajuci prethodnu funkciju.
</p>

<?php 
$n = mt_rand(1, 10);
$x = mt_rand(1,10);
echo "Broj spanova je $n. <br>";
echo "Broj div je $x. <br>";


$k = 1;
function span(){
    global $n;
    
    for($i=1; $i<=$n;$i++){
        $brojSpanova=$i;
    echo "<span> Ovo je span". " ". $brojSpanova. " ". "</span>";
    }
}
span();

for($i=1;$i<=$x;$i++){
    echo "<div>";

    span();
    echo "</div>"; 
}



?>
</body>
</html>