<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
1.	Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for)

<?php 
$x = array(22,333,43,565,678,34,56,789,34,67);

function prebrojava($x){
    $k = count ($x);
    $brojiDvocifrene=0;
    $brojiTrocifrene=0;
    for($i=0; $i<$k; $i++){
        if($x[$i]>=10 and $x[$i]<=99){
            $brojiDvocifrene++;
        }elseif($x[$i]>=100 and $x[$i]<=999){
            $brojiTrocifrene++;
        } 
    }
    if($brojiDvocifrene > $brojiTrocifrene){
        echo "Veci je broj dvocifrenih i iznosi $brojiDvocifrene";
    } else {
        echo "Veci je broj trocifrenih i iznosi $brojiTrocifrene";
    }
}
echo prebrojava($x);
?>
</body>
</html>