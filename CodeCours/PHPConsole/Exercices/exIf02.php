<?php
$temperature = (int)readLine("What's the room temperature now: ");
if ($temperature < 15 ) {
    print("It's cold. Raise the temperature!");
}
else if ($temperature <= 25 ) {
    print("The room temperature is good.");
}
else {
    print("Too warm! Lower the temperature!");
}

?>