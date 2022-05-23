<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$partite= [
    [
    'casa' => 'Fortitudo',
    'ospite' => 'Virtus',
    'puntiCasa' => 100,
    'puntiOspiti'=>78
    ],
    [
    'casa' => 'Olimpia Milano',
    'ospite' => 'Cantu',
    'puntiCasa' => 55,
    'puntiOspiti'=>60
    ],
    [
    'casa' => 'Reggio Calabria',
    'ospite' => 'Siena',
    'puntiCasa' => 59,
    'puntiOspiti'=>88
    ],

    
];


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks</title>
</head>
<body>
<h1>Risultati ultima giornata</h1>
<ul>
    <?php for($i=0; $i < count($partite); $i++){ ?>
        <li>
        <?php echo "{$partite[$i]['casa']} - {$partite[$i]['ospite']} | {$partite[$i]['puntiCasa']} : {$partite[$i]['puntiOspiti']}";?>
        </li>
    <?php } ?>

</ul>
    
</body>
</html>
