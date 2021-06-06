<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>2.	Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti). </p>

    <?php 
    $x = [2,3,4,5,6,9,1];
    $prebrojati = count($x);
    echo $prebrojati."<br/>";
    $zbir=0;
    for($j=0;$j<count($x);$j++){
        $zbir=$zbir + $x[$j];
    }
    echo $zbir."<br/>";
    $prosecnaVrednost = $zbir / $prebrojati;
    echo "Prosecna vrednost je ". number_format($prosecnaVrednost,2)."<br/>";;

    $y=[];
    for($i=0;$i<count($x);$i++){
        if($x[$i]>$prosecnaVrednost){
            array_push($y,$x[$i]);
        }
    }
    echo "Brojevi su: ".join(",",$y);
    ?>
</body>
</html>