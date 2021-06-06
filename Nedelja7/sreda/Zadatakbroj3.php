<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>3.	a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz
b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.
c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.
d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna. 
</p>
    <?php 
    $brojevi=$_GET['brojevi'];

    function ucitavanjeBrojeva($brojevi){

    $niz=explode(" ",$brojevi);
    return $niz;
    }
    $x=ucitavanjeBrojeva($brojevi);
    echo join(",",$x); 
    echo "<br/>";     
echo "<p>=========================================</p>";
echo "<p>b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.
</p>";
    $x =[2,7,5,8,3,6,7,8];
    function parniBrojevi($x){
        $brojac=0;
        $parni=false;
        for($i=0;$i<count($x);$i++){
            if($x[$i] % 2 == 0){
                $brojac++;
                if($brojac > 3){
                    $parni=true;
                    break;
                }
            }
        }
        return $parni;
    }
    echo "<br/>";     

    if(parniBrojevi($x)){
        echo "Niz ima vise od tri parna broja";
    }else {
        echo "Niz nema vise od tri parna broja";
    }
    echo "<br/>";     

    $y=parniBrojevi($x);
    var_dump($y);
    echo "<p>=========================================</p>";
echo "<p>b) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.
</p>";

$niz = [234,999,8756,2345];
function manjeOdHiljadu($niz){
    $ima=false;
    for($i=0;$i<count($niz);$i++){
        if($niz[$i] < 1000){
            $ima=true;
        }
    }
    return $ima;
}
if(manjeOdHiljadu($niz)){
    echo "Niz ima broj/brojeve manje od hiljadu";
} else {
    echo "Niz nema brojeve manje od hiljadu";
}
echo "<p>=========================================</p>";
echo "<p>Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna.</p>";

function proveraInputa($brojevi){
    $provera = false;
    $brojevi = explode(" ", $brojevi);

    if(manjeOdHiljadu($brojevi)===true and parniBrojevi($brojevi)===true){
        $provera = true;
    }
    return $provera;
}
echo "Niz je: $brojevi"."<br/>";
if(proveraInputa($brojevi)){
    echo "Niz ispunjava uslove";
} else {
    echo "Niz ne ispunjava uslove";
}
    ?>
</body>
</html>