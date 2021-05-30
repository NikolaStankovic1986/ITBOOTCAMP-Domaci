<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>3.	Napisati fju koja od niza reči pravi html listu kao meni... 
Npr.  ['Stavka 1', 'Stavka 2', …] pretvara u <ul><li>Stavka 1</li><li>Stavka 2</li>…</ul>.</p>  
<?php 
$niz = ["Stavka 1", "Stavka 2", "Stavka 3"];

function reci($niz){
   foreach($niz as $ind=>$element){
       echo "<ul><li>$element</li></ul>";
   }
}
echo reci($niz);



?>

<?php 
$x = ["Stavka 1", "Stavka 2", "Stavka 3"];
function reci2($x){
$k=count($x);
for($i=0;$i<$k;$i++){
    echo "<ul><li>{$x[$i]}</li></ul>";
}
}
echo reci2($x);
?>
</body>
</html>