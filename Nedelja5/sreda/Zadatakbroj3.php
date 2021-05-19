<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak broj 2</title>
    <style>
    .zelena{
        color: green;
    }
    .crvena {
        color: red;
    }
    </style>
</head>
<body>
<p>3.	Dodati u prethodni program fju koja vraca krace ime. Prikazati duze ime u crvenoj, a krace ime u zelenoj boji.</p>
    <?php 
     $ime1 = "Ana";
     $ime2 = "Milica";
     echo "<p class='crvena'>Duze ime je $ime2</p>";

     function duzeIme(){
         global $ime1, $ime2;
         if (strlen($ime1) < strlen($ime2)){
             return $ime1;
         }  
    }
     $rezultat = duzeIme();
     echo "<p class='zelena'> Krace ime je $rezultat</p>";


    ?>
</body>
</html>