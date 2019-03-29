<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php13</title>
</head>

<body>
    <?php
    class ZMOGUS{
        public $vardas;
        public $pavarde = 'Krumplis';
    public function labas(){
        return 'Labas as esu <i>'.$this -> vardas.'<i>,mano pavarde-'.$this->pavarde.'<br>';
    }
}
 $Stasys = new ZMOGUS();
 $Fredrikas = new ZMOGUS();
    $Stasys -> vardas = "Stasys";
    $Stasys -> pavarde;
    
    $Fredrikas -> vardas = "Alfredas";
    $Fredrikas -> pavarde = "Riauba";
    
    echo $Stasys ->labas();
    echo $Fredrikas ->labas();   
            ?>
</body>
</html>
