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
    $x = [ 
        ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
        ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
        ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
        ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
       ];
       echo "<p>====================================================</p>";
       echo "<p>1.	Preko map fje dodati svakom clanu godine_staza (jedan slucajan broj od 1 do 3, nije niz)</p>";
       $x=array_map(function($osoba){

           for($i=0;$i<count($osoba);$i++){
               $osoba['godine_staza']=mt_rand(1,3);
           }
           return $osoba;
       },$x);
       echo json_encode($x);

       echo "<p>Posle dodavanja godine staza</p>";
       foreach($x as $osoba){
           echo "<p>";
           foreach($osoba as $ind=>$el)
           echo "<span>$ind=$el</span>,";
           echo "</p>";
       }
       echo "<p>====================================================</p>";
       echo "<p>2.	Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)</p>";
       function prikazi_osobu($osoba){
        echo "<p>".join(",", $osoba)."</p>";
        }
        function prikazi_osobe($niz){
        for($i=0; $i<count($niz); $i++)
        prikazi_osobu($niz[$i]);
        }
        // function prikazi_osobe2($x){
        //     for($i=0; $i<count($x); $i++)
        //     prikazi_osobe2($x[$i]);
        //     }
        //     prikazi_osobe2($x);
        usort($x, function($p, $d){
            if($p['godine_staza']==$d['godine_staza'])
                if($p['godine']>$d['godine'])
                    return -1;
                else
                    return 1;
            if($p['godine_staza']>$d['godine_staza'])
                return -1;
            else
                return 1;
            });
        
        prikazi_osobe($x);

        echo "<p> 3.	Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter)</p>";

        function maksimum($x){
            $max=0;
            for($i=0;$i<count($x);$i++){
                if($max <=$x[$i]['godine_staza']){
                    $max = $x[$i]['godine_staza'];
                }
            }
            return $max;
        }
        $y=maksimum($x);
        echo $y;

        $nesto=array_filter($x,function($osoba){
            global $y;
            if($osoba['godine_staza']=== $y){
                return true;
            } else {
                return false;
            }
        } );
        prikazi_osobe($nesto);
    ?>
</body>
</html>