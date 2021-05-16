<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak broj 2</title>
</head>
<body>
    <?php 
    $prviBroj = mt_rand(1,10);
    echo "$prviBroj <br>";
    $drugiBroj= mt_rand(1,10);
    echo "$drugiBroj <br>";
    $treciBroj = mt_rand(1,10);
    echo "$treciBroj <br>";

    
    if($prviBroj <= $drugiBroj && $drugiBroj <= $treciBroj){
        echo "Prvi broj je najmanji i iznosi $prviBroj <br>";
        echo "Drugi broj je srednji i iznosi $drugiBroj <br>";
        echo "Treci broj je najveci i iznosi $treciBroj <br>";
    } elseif ($drugiBroj < $prviBroj && $prviBroj < $treciBroj  ) {
        echo "Drugi broj je najmanji i iznosi $drugiBroj <br>";
        echo "Prvi broj je srednji i iznosi $prviBroj <br>";
        echo "Treci broj je najveci i iznosi $treciBroj <br>";
            }
        elseif ($drugiBroj < $treciBroj && $treciBroj < $prviBroj){
        echo "Drugi broj je najmanji i iznosi $drugiBroj <br>";
        echo "Treci broj je srednji i iznosi $treciBroj <br>";
        echo "Prvi broj je najveci i iznosi $prviBroj <br>";
        } elseif ($treciBroj <  $drugiBroj && $drugiBroj < $prviBroj){
        echo "Treci broj je najmanji i iznosi $treciBroj <br>";
        echo "Drugi broj je srednji i iznosi $drugiBroj <br>";
        echo "Prvi broj je najveci i iznosi $prviBroj <br>";
        } elseif ($treciBroj < $prviBroj && $prviBroj < $drugiBroj){
            echo "Treci broj je najmanji i iznosi $treciBroj <br>";
            echo "Prvi broj je srednji i iznosi $prviBroj <br>";
            echo "Drugi broj je najveci i iznosi $drugiBroj <br>";  
        } else {
            echo "Prvi broj je najmanji i iznosi $prviBroj <br>";
            echo "Treci broj je srednji i iznosi $treciBroj <br>";
            echo "Drugi broj je najveci i iznosi $drugiBroj <br>";  
        }    
    ?>
<!-- <div>
if ($prviBroj < $drugiBroj && $prviBroj < $treciBroj && $drugiBroj < $treciBroj){
    //     echo "Prvi broj je najmanji i iznosi $prviBroj <br>";
    //     echo "Drugi broj je srednji i iznosi $drugiBroj <br>";
    //     echo "Treci broj je najveci i iznosi $treciBroj <br>";
    // }  
    // elseif ($treciBroj<$drugiBroj && $prviBroj < $drugiBroj) {
    //     echo "Prvi broj je najmanji i iznosi $prviBroj <br>";
    //     echo "Treci broj je srednji i iznosi $treciBroj <br>";
    //     echo "Drugi broj je najveci i iznosi $drugiBroj <br>";

    // }elseif ($treciBroj < $prviBroj && $treciBroj < $drugiBroj){
    //     echo "Treci broj je najmanji i iznosi $treciBroj <br>";
    //     echo "Prvi broj je srednji i iznosi $prviBroj <br>";
    //     echo "Drugi broj je najveci i iznosi $drugiBroj <br>";
    // } 
    // elseif ($drugiBroj < $treciBroj && $drugiBroj < $prviBroj && $treciBroj < $prviBroj) {
    // echo "Drugi broj je najmanji i iznosi $drugiBroj <br>";
    // echo "Treci broj je srednji i iznosi $treciBroj <br>";
    // echo "Prvi broj je najveci i iznosi $prviBroj <br>";
    // } 
    // else {
    //     echo "Treci broj je najmanji i iznosi $treciBroj <br>";
    //     echo "Drugi broj je srednji i iznosi $drugiBroj <br>";
    //     echo "Prvi broj je najveci i iznosi $prviBroj <br>";

    // }</div> -->
</body>
</html>