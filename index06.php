<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php06</title>
</head>

<body>
    <?php
$metai = 1774;
$cities3 = ['1668','1790','1147'];
 if ($metai > $cities3[1]) {
 echo "Vasingtonas yra JAV sostine";}
elseif ($metai=1774){
echo "Vasingtonas yra vis dar filadelfijoje";}
else {echo "Liko:".($cities3[1]-$metai)."metai iki Vasingto ikurimo";}
 
 
    ?>

</body>
</html>
