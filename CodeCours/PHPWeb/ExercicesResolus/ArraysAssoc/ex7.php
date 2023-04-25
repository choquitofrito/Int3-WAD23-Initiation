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
            'dateNaissance' => new DateTime ("2000-1-1"),
            'telephone' => '0478324234'
        ],
        [
            'nom' => 'Vitoria',
            'dateNaissance' => new DateTime ("2003-5-5"),
            'telephone' => '0324234233'
        ]
    ];

    // $repertoire[0]['dateNaissance']->modify("+4 years");

    $difference = $repertoire[0]['dateNaissance']->diff(new DateTime());
    print ($difference->format ("%m"));
    

    // var_dump ($difference);
    // die();

    if ($repertoire[0]['dateNaissance'] < $repertoire[1]['dateNaissance']){
        print ("<h5>Laurence est plus agée</h5>");
    }
    else{
        print ("<h5>Vitoria est plus agée</h5>");

    }

    // print ($repertoire[0]['dateNaissance']);



    foreach ($repertoire as $contact){
        print ("<br>". $contact ['nom']); // string
        print ("<br>". $contact['dateNaissance']->format("y-m-d")); // objet!!
        print ("<br>". $contact ['telephone']); // string
    }
    
    ?>
</body>

</html>