<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
2.	Napisati fju koja za dati niz stringova pomocu fje "palindrom" (radjeno na casu) ispituje i prikazuje samo palindrome tog niza.  Npr za niz ["potop", "buducnost", "lul", "nije"]  prikazuje reci "potop" i "lul".

<?php 
$niz = array("potop", "buducnost", "lul", "nije");
// $k=count($palindrom);
// echo $k;
// $k=$palindrom[1];
// echo $k;

function palindrom($niz){
    // $prvoslovo=$palindrom[$i][0];
    // $drugoslovo=substr($palindrom,1,1);
    // $cetvrtoslovo=substr($palindrom,-2,1);
    // $poslednjeslovo=substr($palindrom,-1,0);
    for($i=0;$i<count($niz);$i++){
    if($niz[$i][0]==$niz[$i][4] or $niz[$i][0]==$niz[$i][2]){
           echo "<p>{$niz[$i]}</p> ";
        }
    }
}
echo palindrom($niz);
?>

</body>
</html>