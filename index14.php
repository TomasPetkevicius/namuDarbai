<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php14</title>
</head>

<body>
    <?php
    function metai(){
        
        $made = 2032;
                    
            if (date('Y') > $made) {
            echo '&copy'.$made."-".date('Y');}
            elseif ($made >= date('Y')) {
            echo '&copy'.date('Y');}
         } 
    metai();
    ?>
</body>
</html>
