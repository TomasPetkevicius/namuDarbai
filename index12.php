<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php12</title>
</head>

<body>
  <?php
    if($_POST['Vardas']&&$_POST['Pavarde']){
    echo $_POST['Vardas']." ".$_POST['Pavarde'];
    }
    
    ?>
    <form action="<?php $_PHP_SELF; ?>" method="POST">
    Vardas:<input type="text" name="Vardas"/>
    Pavarde:<input type="text" name="Pavarde"/>
    <input type="submit">
    </form>
</body>
</html>
