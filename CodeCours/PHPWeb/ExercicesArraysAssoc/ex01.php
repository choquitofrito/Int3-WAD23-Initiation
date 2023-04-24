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
    $film1 = [
        'titre' => 'Mystic River',
        'realisateur' => 'Clint Eastwood',
    ];

    $film2 = [
        'titre' => 'The elephant man',
        'realisateur' => 'David Lynch',
    ];

    $filmsA = [$film1, $film2];


    $filmsB = [
        [
            'titre' => 'Mystic River',
            'realisateur' => 'Clint Eastwood',
        ],
        [
            'titre' => 'The elephant man',
            'realisateur' => 'David Lynch',
        ]
    ];

    print_r ($filmsB);




    ?>
</body>

</html>