<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <table style="border: 1px solid black">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Hobby</th>
            </tr>
        </thead>

        <tr>
            <td>Vitoria</td>
            <td>cinema</td>
        </tr>
        <tr>
            <td>Senem</td>
            <td>lire</td>
        </tr>
    </table> -->
    <?php

    $repertoire = [
        [
            'nom' => 'Laurence',
            'dateNaissance' => new DateTime("2000-1-1"),
            'telephone' => '0478324234',
            'site' => 'http://www.google.com'
        ],
        [
            'nom' => 'Vitoria',
            'dateNaissance' => new DateTime("2003-5-5"),
            'telephone' => '0324234233',
            'site' => 'http://www.lesoir.be'
        ],

    ];

    
    if (count($repertoire) > 0) {
        
        print("<table>");
        print("<thead>");
        print("<tr>");
        
        foreach (array_keys($repertoire[0]) as $valeur){
            print ("<th>" . $valeur . "</th>");
        }
        
        print("</tr>");
        print("</thead>");

        // afficher les valeurs
        foreach ($repertoire as $contact){
            print ("<tr>");
                print ("<td>");
                print ($contact['nom']);
                print ("</td>");
                print ("<td>");
                print ($contact['dateNaissance']->format ("Y-m-d"));
                print ("</td>");
                print ("<td>");
                print ($contact['telephone']);
                print ("</td>");
                print ("<td>");
                // <a href='toototo.com'>

                $site = $contact['site'];

                print ("<a href='" . $site . "'>" . $site . "</a>");
                
                // print ("<a href='$site'>$site</a>");
                print ("</td>");

            print ("</tr>");
        }

        print("</table>");
    }
    else {
        print ("<h5>Il n'y a pas de données</h5>");

    }





    // var_dump($repertoire);
    die();

    ?>
</body>



</html>