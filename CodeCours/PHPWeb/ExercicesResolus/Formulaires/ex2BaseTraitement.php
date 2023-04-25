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
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    print ("Bonjour " . $prenom . " " . $nom);
    if ($nom == "Leal" AND $prenom == "Francisco"){
        print ("<br><a href='http://www.starwars.com'>Que la force soit avec toi!</a>");

    }
    

?>
</body>
</html>