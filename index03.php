    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php3</title>
</head>
<body>
    <?php 
    $x = 10;
    $y = 7;
    $z = $x+$y;?>
    
    <?php echo $x."+".$y."=".$z;?>
    <br>
    <?php $z = $x-$y; echo $x."-".$y."=".$z;?>
    <br>
    <?php $z = $x*$y; echo $x."*".$y."=".$z;?>
    <br>
    <?php $z = $x/$y; echo $x."/".$y."=".$z;?>
    <br>
    <?php $z = $x%$y; echo $x."%".$y."=".$z;?>
        
</body>
</html>
