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
    print("<h3>Bonjour depuis php!</h3>");
    // print(date("d/m/y h:i:s"));

    $films = [
        [
            'titre' => 'Alien',
            'realisateur' => 'R. Scott'
        ],
        [
            'titre' => 'Cococo',
            'realisateur' => 'Lalala'
        ]
    ];

    var_dump($films);


    // code qui connecte à BD

    // obtenir des données 

    // afficher les données

    // $tab = [ 4, 5, 6];

    // $tab2 = [ 10, 11];

    // $tt = [ $tab , $tab2 , [ 4,5,10] ];

    // var_dump ($tt);

    $p1 = [
        'nom' => 'Dupont',
        'prenom' => 'Lola'
    ];

    $p2 = [
        'nom' => 'Dupont2',
        'prenom' => 'Lola2'
    ];

    $p3 = [
        'nom' => 'Dupont3',
        'prenom' => 'Lola3'
    ];



    $personnes = [$p1, $p2, $p3];

    var_dump($personnes);
    print($personnes[2]['prenom']);


    $personnes2 =
        [
            [
                'nom' => 'Dupont',
                'prenom' => 'Lola'
            ],
            [
                'nom' => 'Dupont2',
                'prenom' => 'Lola2'
            ],
            [
                'nom' => 'Dupont3',
                'prenom' => 'Lola3'
            ]
        ];

    $personnes2[0]['adresse'] = "Rue Van AA";
    var_dump($personnes2);

    $personnes2[1]['prenom'] = "Hsin I";
    var_dump($personnes2);

    $personnes2[2]['hobbies'] = ['cinema', 'natation', 'lire'];
    var_dump($personnes2);

    $personnes2[2]['hobbies'][1] = 'tennis';
    var_dump($personnes2);





















    ?>
</body>

</html>