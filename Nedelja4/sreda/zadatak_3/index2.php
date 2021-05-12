<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 3</title>
    <style>
    table, tr, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>
<body>
    <?php 
    $broj1 = mt_rand(1,10);
    $kvadratbroja1 = $broj1**2;
    
    $broj2 = mt_rand(1,10);
    $kvadratbroja2 = $broj2**2;

    $broj3 = mt_rand(1,10);
    $kvadratbroja3 = $broj3**2;
    ?>
    <table>
    <tr> 
    <td><?=$broj1?></td>
    <td><?=$kvadratbroja1?></td> 
    </tr>
    <tr>
    <td><?=$broj2?></td>
    <td><?=$kvadratbroja2?></td>
    </tr>
    <tr>
    <td><?=$broj3?></td>
    <td><?=$kvadratbroja3?></td>
    </tr>
    </table>
</body>
</html>