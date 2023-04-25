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
    $repertoire = [
        [
            'nom' => 'Laurence',
            'dateNaissance' => new DateTime ("2000-3-3"),
            'telephone' => '0478324234'
        ],
        [
            'nom' => 'Vitoria',
            'dateNaissance' => new DateTime ("2003-5-5"),
            'telephone' => '0324234233'
        ]
    ];


    if ($repertoire[0]['dateNaissance'] < $repertoire[1]['dateNaissance']){
        print ("<h5>Laurence est plus agée</h5>");
    }
    else{
        print ("<h5>Vitoria est plus agée</h5>");

    }

    // print ($repertoire[0]['dateNaissance']);


    var_dump ($repertoire);

    ?>
</body>

</html>