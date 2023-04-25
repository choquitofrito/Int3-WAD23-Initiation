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
    $films = [
        [
            'titre' => 'Mystic River',
            'realisateur' => 'Clint Eastwood',
        ],
        [
            'titre' => 'The elephant man',
            'realisateur' => 'David Lynch',
        ]
    ];

    foreach ($films as $arrayFilm){
        print ("titre: " . $arrayFilm['titre'] . "<br>");
        print ("realisateur: " . $arrayFilm['realisateur'] . "<br>");

    }



    ?>

</body>

</html>