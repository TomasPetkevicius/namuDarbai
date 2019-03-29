<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php05</title>
</head>

<body>
<?php
$cities=['Tokijas'=>['13.6','1868','Japonija'],
         'Vasingtonas'=>['0.6','1790','JAV'],
         'Maskva'=>['11.5','1147','Rusija']
         ];
  $cities['Londonas']=['8.6','43','Anglija'];
 ?>
    <ul>
            <li>
                <?php echo "-Gyventoju skaicius:".$cities['Londonas'][0]."mln.";?>
            </li>
            <li>
                <?php echo "Ikurtas:".$cities['Londonas'][1]."m.";?>
            </li>
            <li>
                <?php echo "Salis:".$cities['Londonas'][2];?>
            </li>
    </ul>
    
</body>
</html>
