<?php
$age = (int)readline ("vous avez quel age? ");
while ($age < 0 || $age > 130 ) {
    
    $age = readline ("vous avez quel age? ");
      
}
print ("Bienvenue");
?>