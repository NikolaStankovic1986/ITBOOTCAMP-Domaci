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
       
       "<p>===============================================</p>";
       "<p>1.	Dodati u gornji niz jos 4 osobe po zelji.</p>";
      array_push($x, ['ime'=>"Nikola","godine"=>34, "grad"=>"Uzice","pozicija"=>"inzenjer"]);
      array_push($x,['ime'=>"Marko","godine"=>22, "grad"=>"Valjevo","pozicija"=>"tehnicar"]);
      array_push($x,['ime'=>"Jovana","godine"=>23, "grad"=>"Priboj","pozicija"=>"stomatolog"]);
      array_push($x,['ime'=>"Ana","godine"=>35, "grad"=>"Cacak","pozicija"=>"programer"]);                                                                              
     
     foreach($x as $osoba){
         echo "<p>";
         foreach($osoba as $ind=>$el)
         echo "<span>".$ind=$el."</span>";
         echo "</p>";
     }

     "<p>===============================================</p>";
     "<p>2.	Napisati fju koja prikazuje imena svih programera.</p>";
        function imenaProgramera($x){
          $str="";
          $niz=[];
            for($i=0;$i<count($x);$i++){
                if($x[$i]['pozicija']==='programer'){
                    $str.=$x[$i]['ime'];
                    // $ind=$i;
                    array_push($niz,$x[$i]['ime']);
                }
            }
            echo "<p> Imena programera kao string su ". $str."</p>";
            echo "<p> Imena programera kao niz su ". join(",",$niz)."</p>";

        }
        imenaProgramera($x);
        "<p>===============================================</p>";
        "<p>3.	Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s.</p>";
        function podaciDateOsobe($x, $osoba){
            $niz=[];
            foreach($x as $el){
                if($el['ime']==$osoba){
                    echo join(",", $el);
                }
                if(strpos($el['ime'],"s")){
                    array_push($niz, $el['ime']);
                // if(str_contains(strtolower($el['ime']),"s")){
                //     array_push($niz, $el['ime']);
                // }    
                }
            
            }
            echo "<p>".join(",", $niz)."</p>";
        }
        podaciDateOsobe($x, "Nikola");
          
            

    ?>
</body>
</html>