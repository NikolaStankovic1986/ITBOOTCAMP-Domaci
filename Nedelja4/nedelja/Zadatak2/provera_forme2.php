<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provera forme zadatak broj 2</title>
</head>
<body>
    <?php 
    $imePrezime = "";
    if(isset($_GET['ime_prezime']))
    $imePrezime = $_GET['ime_prezime'];
    $prvoSlovoImena = substr($imePrezime, 0 , 1);
    echo "<p> Prvo slovo imena je $prvoSlovoImena </p>";
    $razmakIzmedjuImenaIprezimena = strpos($imePrezime, " ", 1);
    echo "<p> Razmak se nalazi na poziciji broj $razmakIzmedjuImenaIprezimena </p>";
    $razmakIzmedjuImenaIprezimena_1 = $razmakIzmedjuImenaIprezimena + 1;
    $prvoSlovoPrezimena = substr($imePrezime, $razmakIzmedjuImenaIprezimena_1, 1);
    echo "<p> Prvo slovo prezimena je $prvoSlovoPrezimena </p>";
    echo "<p> Inicijai imena i prezimena su $prvoSlovoImena.$prvoSlovoPrezimena</p>";
    ?>
</body>
</html>