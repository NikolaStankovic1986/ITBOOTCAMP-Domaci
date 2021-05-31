<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
1. Написати функцију која враћа већи од 3 броја (3 броја су прослеђени функцији кроз параметре)
<?php 

function vracaVecibroj($a, $b, $c){
    if ($a > $b and $a > $c){
        return $a;
    } elseif($b > $c){
        return $b;

    }else {
        return $c;
        
    }
}
$a =2;
$b = 4;
$c = 3;
echo "<p>". "Najveci je broj". " ". vracaVecibroj($a, $b, $c). "</p";


?>
</body>
</html>