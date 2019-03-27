<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php05</title>
</head>

<body>
<?php
$cities=['cities'=>['Tokijas',
                    'Vasingtonas',
                    'Maskva'],
        'cities'[]=['Londonas'];               
        'cities2'=>['13.6','0.6','11.5'],
'cities2'[]=['8.6'];
        'cities3'=>['1668','1790','1147'],
'cities3'[]=['43'];        
        'cities4'=>['Japonija','JAV','Rusija']];
'cities4'[]=['Anglija'];
echo"<ul>";
echo "<li>";
echo "-Gyventojų skaičius:".$cities('cities2'[3]);
echo "</li>";
echo "<li>";
echo "-Įkurtas:".$cities('cities3'[3]);
echo "</li>";
echo "<li>";
echo "-Šalis:".cities('cities4'[3]);
echo "</li>";
echo"</ul>"; 
 ?>
    
</body>
</html>
