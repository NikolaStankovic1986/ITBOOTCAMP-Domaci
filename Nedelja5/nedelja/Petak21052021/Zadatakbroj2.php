<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak broj 2</title>
    <style>
    .crvena {
        color: red;
    }
    .zelena {
        color: green;
    }
    </style>
</head>
<body>
    <p>2.	Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje 100.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom.</p>
    <?php 
    // $i = 30;
    // $proizvod=1;
    // while ($i >=1){
    //     if($proizvod<100000){
        
    //     echo "<p> Ovo je proizvod $proizvod</p>"."<br/>";
    //   $proizvod *=$i;
    //   echo "<p> Ovo je broj $i</p>" ."<br/>";

    //     $i--;
    //     echo $proizvod;
    // }
    // }
    ?>
    <?php 
            $proizvod=1;

    for($i=30;$i>=1;$i--){
        $proizvod *=$i;
       if($proizvod>=100000){
        break;
    } 
    }
    
    echo "<p class='crvena'>". "Proizvod je ". $proizvod. "</p>". "<br>";
    echo "<p class='zelena'>"."Poslednji broj je ". $i."</p>";
   

    ?>
 


   

</body> 
</html>