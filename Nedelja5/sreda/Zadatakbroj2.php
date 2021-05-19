<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak broj 2</title>
</head>
<body>
<p>Napisati fju koja za zadata dva imena (globalne promenljive) vraca duze ime. Pri pozivanju prikazati rezultat.</p>
    <?php 
    $ime1 = "Ana";
    $ime2 = "Milica";

    function duzeIme(){
        global $ime1, $ime2;
        if (strlen($ime1) > strlen($ime2)){
            return $ime1;
        } else {
            return $ime2;
        }
    }
    $rezultat = duzeIme();
    echo "<p> $rezultat</p>";
    
    ?>
</body>
</html>