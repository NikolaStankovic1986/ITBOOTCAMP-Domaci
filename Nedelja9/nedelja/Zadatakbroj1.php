<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Baza{
public $conn;
function __construct($baza){
    $this->conn = new mysqli('localhost', 'root', '', $baza);
    if ($this->conn->connect_error)
	die ('Greska: '. $this->conn->connect_error);
else
	echo 'Konektovan!';
    }
}


function izvrsi_select($upit){
$podaci= $this->conn->query($upit);
    if($podaci === false){
        return ['uspesno'=> false, 'poruka'=>$this->conn->error];
    }else{
        $niz = $podaci->fetch_all(MYSQLI_ASSOC);
        return['uspesno'=> true, 'niz'=>$niz]; 
    }
}
function prikazi_destinacije(){
$p = $this=>izvrsi_select("SELECT putovanja.datum_pol, putovanja.datum_pov,destinacije.drzava, destinacije.grad FROM `putovanja` JOIN destinacije ON putovanja.destinacija_id=destinacije.id_destinacije");
    if ($p['uspesno'] == true){
        echo $p['niz'];
    }else{
        die ("neuspesan upit:".$p['poruka']);
    }
}

function prikazi_putnike(){
    $p = $this=>izvrsi_select(SELECT CONCAT(putnici.ime_prezime, " "),putovanja.datum_pol, putovanja.datum_pov, destinacije.drzava, destinacije.grad 
    FROM (`putnici` JOIN `spisak putnika` ON putnici.broj_pasosa=spisak putnika.broj_pasosa)
    JOIN (`putovanja` JOIN destinacije ON putovanja.destinacija_id=destinacije.id_destinacije) ON putovanja.id=spisak_putnika.id_putovanja);
        if($p['uspesno'] == true){
            echo $p['niz'];
        }else{
            die("neuspesan upit:".$p['poruka']);
        }
}

function otkazi_rezervaciju($br_pasosa){
    $p=$this=>izvrsi_select(DELETE FROM `spisak putnika` WHERE broj_pasosa=$br_pasosa);
        if($p['uspesno'] == true){
            return $p['niz'];
        }else{
            die ("neuspesan upit:".$p['poruka']);
        }
}


}
$b = new Baza('9232_32_1');
?>
</body>
</html>