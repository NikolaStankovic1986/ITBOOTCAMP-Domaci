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
    class Krevet {
        private $cena;
        public $duzina, $sirina, $materijal;
        public function __construct($ncena,$nduzina, $nsirina, $nmaterijal){
            $this->cena=$ncena;
            $this->duzina=$nduzina;
            $this->sirina=$nsirina;
            $this->materijal=$nmaterijal;
        }
        public function citanje_cena(){
            return $this->cena;
            }
        public function __toString(){
            return "Krevet je duzine ".$this->duzina." i sirine ".$this->sirina." napravljen od ".$this->materijal." po ceni ".$this->cena;
        }
        public function popust($popust){
            $p= $this->cena * $popust/100;
            $novacena =$this->cena - $p;
            $this->cena=$novacena;
            // return $novacena;
        }
    }
    
    $krevet1 = new Krevet(100,30,20,"pamuk");
    $krevet2 = new Krevet(90,25,15,"vuna");
    if($krevet1->duzina>$krevet2->duzina){
        echo $krevet1->duzina."<br/>";
    }
    else{
        echo $krevet2->duzina."<br/>";;
    }
    $krevet3 = new Krevet(80,30,20, "svile");
    echo $krevet3->__toString()."<br/>";;
    $krevet3->popust(5);
    echo $krevet3->__toString();
    ?>
</body>
</html>