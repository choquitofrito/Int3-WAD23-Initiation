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
    // var_dump ($_POST);

    $dateNaissance = $_POST['dateNaissance'];
    
    $dateActuelle = new DateTime();
    $dateUser = new DateTime($dateNaissance);
    $difference = $dateActuelle->diff($dateUser);

    var_dump ($difference);
    
    $age = $difference->format ("%y");

    print ("<h3>Bonjour " . $_POST['prenom'] . " " . $_POST['nom'] . ", vous avez " . $age );
?>


</body>
</html>

