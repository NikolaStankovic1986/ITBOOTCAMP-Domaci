<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak broj 3</title>
</head>
<body>
    <p>3.	Prikazati brojeve od 30 do 99, ali preskociti sve one cija je prva cifra deljiva sa 3, ili je druga cifra deljiva sa 4.</p>

    <?php 

for ($i=30;$i<=99;$i++){
    $prvaCifra = floor($i / 10);
    $drugaCifra = $i % 10;
    if($prvaCifra % 3 == 0 || $drugaCifra % 4 == 0){
        continue;
    } else {
        echo $i."<br/>";
   }
        
   
    
}


    ?>
</body>
</html>