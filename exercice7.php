<?php

echo"Ce programme affichera la factorielle d'un nombre donné \n";
$lecture = readline ("Donnez un nombre : ");

$fac = 1;
for ($i = 1; $i <= $lecture; $i++) {
    $fac = $fac * $i;    
}
echo"La factorielle vaut :" .$fac;