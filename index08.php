<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php08</title>
</head>

<body>
  <?php
    $temp=[- 4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
    $vid='';
    $vid = array_sum($temp)/count($temp);
echo round($vid); //vidutine temperatura
   ?>
    
    <?php
    $temp=[- 4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
    
    rsort($temp);
      
    print_r(array_slice($temp,0,5)); //5auksciausios
    print_r(array_slice($temp,-5,5));//5 zemiausios
    
     
      ?>
</body>
</html>
