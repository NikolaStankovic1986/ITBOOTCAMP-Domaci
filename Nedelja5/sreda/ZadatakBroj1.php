<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak broj 1</title>
</head>
<body>
<p>1.	Napisati fju koja za zadata dva imena (globalne promenljive) ispisuje duze ime.</p>

    <?php 
    $ime1 = "Ana";
    $ime2 = "Milica";

    function duzeIme (){
        global $ime1, $ime2;
        if (strlen($ime1) > strlen($ime2)) {
            echo "<p> $ime1</p>";
        } else {
            echo "<p>$ime2</p>";
        }
    }
    duzeIme();
    ?>
</body>
</html>