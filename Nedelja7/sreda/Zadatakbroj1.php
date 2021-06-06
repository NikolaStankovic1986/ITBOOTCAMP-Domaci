<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .crvena {
        color:red;
    }
    .zelena {
        color: green;
    }
    </style>
</head>
<body>
<p>1.	Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz.</p>
    <?php 
    
    $x = array ("jedan", "dva", "tri","cetiri","pet", "dvadeset");
    // $boja1 = ['red']; 
    // $boja2 = ['green'];       
   
        $y=[];
        $duzina=5;
    for($i=0;$i<count($x);$i++){
        if(strlen($x[$i])<$duzina){
            // echo "<span style='color:".$boja1[$i]."'>".$x[$i]."</span>";
            array_push($y,  "<span class='crvena'>".$x[$i]."</span>");

        } else {
            // echo "<span style='color:".$boja2[$i]."'>".$x[$i]."</span>";
            array_push($y,  "<span class='zelena'>".$x[$i]."</span>");

        }
       
    }
    echo "Novi niz je: ".join(",",$y);

    ?>
</body>
</html>