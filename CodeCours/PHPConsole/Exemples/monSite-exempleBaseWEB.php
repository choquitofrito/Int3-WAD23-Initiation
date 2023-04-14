<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>E-commerce</h1>
    Bonjour à toutes

    <ul>
        <?php
            $tab = ['Oranges', 'Citrons', 'Poires'];

            // var_dump ($tab);
            
            foreach ($tab as $fruit){
                print ("<li>");
                print ($fruit);
                print ("</li>");
            }
            
        ?>
    </ul>
    <footer>
    <?php
        print (date("d-m-Y h:i:s"));
    ?>
    </footer>
</body>
</html>