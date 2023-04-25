<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $paysCapitales = [
        [
            'pays' => 'Italie',
            'capitale' => 'Rome'
        ],
        [
            'pays' => 'France',
            'capitale' => 'Paris'
        ],
        [
            'pays' => 'Irlande',
            'capitale' => 'Dublin'
        ],
    ];


    $paysCapitales[] = [
        'pays' => 'Espagne',
        'capitale' => 'Madrid'
    ];


    $paysCapitales[] = [
        'pays' => 'Maroc',
        'capitale' => 'Rabat'
    ];


    
    print("<ul>");
    foreach ($paysCapitales as $pays) {
        print("<li>La capitale de " . $pays['pays'] . " est " . $pays['capitale'] . "</li>");
    }
    
    print("</ul>");
    
    var_dump($paysCapitales);


    ?>
</body>

</html>