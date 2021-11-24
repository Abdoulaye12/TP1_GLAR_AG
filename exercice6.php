<?php

echo"Ce programme affichera la somme des entiers jusqu'à le nombre donné \n";
$lecture = readline ("Donnez un nombre : ");

$som = 0;
for ($i = 1; $i <= $lecture; $i++) {
    $som = $som + $i;    
}
echo"La somme est :" .$som;