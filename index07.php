<?php
$cities4=['Tokijas','Vasingtonas','Maskva','Londonas'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php07</title>
</head>

<body>  
    <ul>
        <?php
                for($city=0;$city < count($cities4);$city++) {
                echo "<li>$cities4[$city]</li>";}    
        ?>
    </ul>
    
    <ul>
    <?php
    foreach($cities4 as $city){
    echo $city.'<br>';
    }    
    ?>
    </ul>
        
</body>
</html>