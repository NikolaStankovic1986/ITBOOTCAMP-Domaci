<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>2.2.	Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak=>28] pronalazi:
    -	Koji dan je najuspesniji
    -	Kolika je prosecna uspesnost
    -	Razliku izmedju najbolje i najgore uspesnosti</p>
    <?php 
    $x = ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak'=>28];
    function najuspesniji($x){
        $max=0;
        $ind="";
        foreach($x as $dan=>$uspesnost){
            if($max < $uspesnost){
                $max=$uspesnost;
                $ind=$dan;
            }
        }
        echo "Najuspesiji dan je $ind i njegova uspesnost je $max"."<br/>";
        return $max;
        return $ind;
    }
    $y=najuspesniji($x);

    function prosecnaUspesnost($x){
        $prosek=0;
        $zbir=0;
        $prebrojavanje=0;
        
        foreach($x as $dan=>$uspesnost){
            $prebrojavanje++;
            $zbir+=$uspesnost;
        }
        $prosek=$zbir/$prebrojavanje;
        return $prosek;
    }
    $p=prosecnaUspesnost($x);
    echo "Prosecna uspesnost je $p"."<br/>";
    
    function najneuspesniji($x){
        foreach($x as $dan=>$uspesnost){
          $min =min($x);
          $uspesnost=array_search($min, $x);
          $najneuspesnijiDan=array_search($dan,$x);
          $max = max($x);
          $uspesnost=array_search($max, $x);
          $razlika=$max-$min;

        }
        echo "Najuspesnije je $max, najneuspesniji je $min i razlika je $razlika";
        echo $najneuspesnijiDan;
    }

    najneuspesniji($x);
    
    ?>
</body>
</html>