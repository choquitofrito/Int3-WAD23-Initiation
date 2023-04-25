<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./formulaire1TraitementPost.php" method="POST">
    Nom<input type="text" name="nom">
    Prénom<input type="text" name="prenom">
    Date de naissance<input type="date" name="dateNaissance">

    Hobby
    <select name="hobby">
        <option value="manger">Manger</option>
        <option value="natation">Natation</option>
        <option value="cinema">Cinema</option>
        <option value="tricot">Tricot</option>
    </select>

    <input type="submit" value="Envoyer">
</form>




</body>
</html>