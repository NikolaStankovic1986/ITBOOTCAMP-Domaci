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
    //1.	Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false.
    $x = [1,2,4,5,6,1];
    function vraca($x){
       $imaNulu=false;
        for($i=0;$i<count($x);$i++){
            if($x[$i]==0){
                $imaNulu=true;
            }
        }
        return $imaNulu;
    }
    if (vraca($x)){
        echo "Niz ima nulu";
    } else {
        echo "Niz nema nulu";
    }
    ?>
</body>
</html>