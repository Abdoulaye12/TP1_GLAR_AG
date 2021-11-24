<?php

echo"Ce programme affichera la table de multiplication du nombre que vous avez donné \n";
$lecture = readline ("Donnez un nombre : ");

$stop = 0;
$stop = $lecture + 10;
echo"la table de multiplication de ".$lecture. ": \n";

$i = 0;
for ($i = 0; $i <= 10; $i++) {
    echo $lecture. "x" .$i. "=" .$lecture*$i. "\n";
}