







<!-- <!DOCTYPE html>
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
   

</ul>

    
</body>
</html> -->
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

// if(empty($_Get[$name])){
//     $alert = 'non hai inserito il nome';
// }
// $email = $_GET('email');
// if(empty$_GET('email')){
//     $alert = 'non hai inserito la mail'
// }elseif(strpos($email, '@') !== false && strpos($email, '.')){
//     $alert= 'la tua mail è valida';
//    }else{
//        $alert = 'la mail non è valida';
//    };

   $posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
$alunni = [
    [
        'nome' => 'Dennis',
        'cognome' => 'Gambini',
        'voti' => [2,7,9,6]
    ],
    [
        'nome' => 'Francesco',
        'cognome' => 'Ciannavei',
        'voti' => [5,7,10,1]
    ],
    [
        'nome' => 'Davide',
        'cognome' => 'Chon',
        'voti' => [3,4,8,9]
    ],
    [
        'nome' => 'Federico',
        'cognome' => 'Magli',
        'voti' => [1,9,8,6]
    ]
];
function calcolaMedia($array) {
    $somma = 0;
    for($i = 0; $i < count($array); $i++){
        $somma = $somma + $array[$i];
    }
    $media = $somma / count($array);
    return $media;
}


$myKeys = array_keys($posts);
// var_dump($myKeys);


$testo='Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo ad placeat consequuntur quia veritatis ipsam autem atque facilis nobis velit ullam reiciendis temporibus, molestiae vel minus harum asperiores adipisci iste, maxime ducimus repellendus cum tempore. Vero numquam quia tempora, sunt sapiente explicabo quasi est perferendis laboriosam blanditiis suscipit ab. Quaerat autem, cumque ullam quod iusto ipsa ipsum, culpa explicabo architecto aliquid eos quas error saepe, ratione fugiat. Repudiandae sequi, accusantium dolores eos nesciunt quam veniam repellendus et quaerat, non eligendi sed sapiente unde voluptas explicabo at totam, dolor numquam culpa quod delectus? Enim facere quam aspernatur blanditiis temporibus. Quae, officiis.';
$testoEsploso = explode('.', $testo);
// var_dump($testoEsploso);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack di gruppo</title>

    <style>

        /* stile per lo snack 6 */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .grey, .green {
            padding: 40px;
            float: left;
            width: 50%;
        }
        .grey {
            background: grey;
        }
        .green {
            background: green;
        }



    </style>
    
</head>
<body>

    <section id="snack1">
        
        <h1> Snack 1 </h1>
        <ul>
            <?php for($i=0; $i < count($partite); $i++){ ?>
        <li>
            <?php echo "{$partite[$i]['casa']} - {$partite[$i]['ospite']} | {$partite[$i]['puntiCasa']} : {$partite[$i]['puntiOspiti']}";?>
        </li>
            <?php } ?> 
        </ul>


    </section>

    <section id="snack2">
        
        <h1> Snack 2 </h1>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

    </section>

    <section id="snack3">
        
        <h1> Snack 3 </h1>
        <ul>
            <?php for($i=0; $i < count($myKeys); $i++){ ?>
        <li>
            <?php echo "{$myKeys[$i]}" ;?>
        </li>
            <?php } ?> 
        </ul>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

    </section>

    <section id="snack4">
        
        <h1> Snack 4 </h1>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

    </section>

    <section id="snack5">
        
        <h1> Snack 5 </h1>
       <ul>
           <?php for($i=0; $i < count($testoEsploso); $i++){ ?>
            <li>
                <?php echo $testoEsploso[$i] ;?>
            </li>
        

           
       <?php } ?>
       </ul>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

    </section>

    <section id="snack6">
        
        <h1> Snack 6 </h1>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

    </section>

    <section id="snack7">
        
        <h1> Snack 7 </h1>

<ul>
    <?php for($k = 0; $k < count($alunni); $k++){ ?>
        <li>
            <?php 
            $a = calcolaMedia($alunni[$k]['voti']);
            echo $alunni[$k]['nome'].' '.$alunni[$k]['cognome'].' media voti: '.$a; 
            ?>
        </li>
    <?php } ?>
</ul>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->

    </section>



    
</body>
</html>










