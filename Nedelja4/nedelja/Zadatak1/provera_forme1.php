<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provera forme iz zadatka broj 1</title>
</head>
<body>
    <?php 
    // 1. resenje
    // $ime = "";
    // if(isset($_GET['ime']))
    // $ime = $_GET['ime'];
    // $prezime = "";
    // if(isset($_GET['prezime']))
    // $prezime = $_GET['prezime'];

    // 2. resenje
    // $ime = (isset($_GET['ime']))? $_GET['ime'];
    // $prezime = (isset($_GET['prezime']))? $_GET['prezime'];

    // 3. resenje
    $ime = $_GET['ime'];
    $prezime = $_GET['prezime'];

    $inicijalIme = substr($ime, 0, 1);
    $inicijalPrezime = substr($prezime, 0, 1);

    echo "<p>$inicijalIme.$inicijalPrezime.</p>";
    ?>
</body>
</html>