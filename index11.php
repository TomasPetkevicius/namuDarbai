<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    
</head>

<body>
    <?php
    if($_POST['a']&&$_POST['b']){
    echo $_POST['a']*$_POST['b'];
    }
    
    ?>
    <form action="<?php $_PHP_SELF; ?>" method="POST">
    a:<input type="text" name="a"/>
    b:<input type="text" name="b"/>
    <input type="submit">
    </form>
    
  </body>
</html>