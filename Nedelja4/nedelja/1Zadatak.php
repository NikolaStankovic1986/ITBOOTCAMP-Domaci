<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak broj 1</title>
    <style>
    .zelena {
            color: green;
        }
     .crvena {
         color: red;
     }
     .zelena1{
         color:green;
     }
     .crvena1{
         color:red;
     }
     /* .zelena2{
         color:green;
     }
     .crvena2{
         color:red;
     }       */
    </style>
        
</head>
<body>

<!-- Prvi nacin -->
    <?php 
    $prviBroj = mt_rand(1,10);
    $drugiBroj = mt_rand(1,10);
    if($prviBroj > $drugiBroj){
        echo "<p class='zelena'> $prviBroj </p><br/>";
        echo "<p class='crvena'> $drugiBroj</p><br/>";
    } else {
        echo "<p class='crvena'> $prviBroj </p><br/>";
        echo "<p class='zelena'> $drugiBroj</p><br/>";
    }
    ?>

    <!-- Drugi nacin -->
    <?php 
    $prviBroj = mt_rand(1,10);
    $drugiBroj = mt_rand(1,10);
    if($prviBroj > $drugiBroj){
       $boja1="zelena1";
       $boja2="crvena1";
    } else {
        $boja1="crvena1";
        $boja2="zelena1";

    }
    ?>
    <p class='<?=$boja1?>'><?=$prviBroj?></p> <br>
    <p class='<?=$boja2?>'><?=$drugiBroj?></p> <br>
    <!-- <p class='<?=$boja3?>'><?=$prviBroj?></p> <br>
    <p class='<?=$boja4?>'><?=$drugiBroj?></p> <br> -->

   
</body>
</html>