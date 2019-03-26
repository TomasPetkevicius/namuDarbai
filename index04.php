<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php04</title>
</head>

<body>
<?php
$cities=['Berlynas',
         'Roma',
         'Londonas'];
$cities[]='Tokijas';
       print_r($cities);?>
<ul><li>
<?php
$cities=['berlynas',
         'Roma',
         'Londonas'];
   echo $cities[1]?>
    </li>
</ul>
    
    
<ul>
    <li>
<?php
$cities2=['Tokijas'=>'13.6',
          'Vasingtonas'=>'0.6',
          'Maskva'=>'11.5'];
$cities2[]=['Londonas'=>'8.6'];
    echo "Tokijuj gyvena".$cities2['Tokijas']."mln. gyventoju."
?>
    </li>
 </ul>    
</body>
</html>
