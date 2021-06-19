<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak</title>
</head>
<body>
    <?php 
    class SastojakHrane {
        public $naziv, $mera,$kalorije;
        function __construct($naziv,$mera,$kalorije) {
            $this->naziv = $naziv;
            $this->mera = $mera;
            $this->kalorije = $kalorije;
        }
        function promeni_meru($n_mera){
            $this->mera = $n_mera;
        }
        function prikazi(){
            echo "<p>$this->naziv $this->mera $this->kalorije </p>";
        }
    }
     $a = new SastojakHrane('brasno','300','20');
     echo $a->prikazi();
     echo "<br>";
     $a->promeni_meru('500');
     echo $a->prikazi();


    ?>
    <br>

    <?php
    require_once "podaci1.php"; 
    class Jelo {

        public $naslov,$opis;
        public $ob;

        function __construct($naslov,$opis,$podaci) {
            $this->naslov = $naslov;
            $this->opis = $opis;
            $this->podaci = [];

            for($i = 0; $i <count($podaci);$i++){
                $sastojak =  new SastojakHrane($podaci[$i]['naziv'],$podaci[$i]['mera'],$podaci[$i]['kalorije']);
               array_push($this->podaci, new SastojakHrane($podaci[$i]['naziv'],$podaci[$i]['mera'],$podaci[$i]['kalorije']));
            }
           
        }

        function prikazi(){
            echo "<div>";
            echo "<p>Naslov: $this->naslov</p>";
            echo "<p>Opis: $this->opis</p>";
            echo "Sastojci: ";
            for($i = 0; $i <count($this->podaci);$i++) {
                
                $this->podaci[$i]->prikazi();
            }
            echo "</div>";
        }
        function promeniMeru($sastojak,$nova_mera){
            for($i=0;$i<count($this->podaci);$i++){
                if($this->podaci[$i]->naziv == $sastojak)
                    $this->podaci[$i]->promeni_meru($nova_mera);
            }
        }
    }
    $jelo = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
    $jelo->prikazi();
    echo "<br>";
    $jelo->promeniMeru("brasno", "400g");
    $jelo->prikazi();

    ?>
</body>
</html>