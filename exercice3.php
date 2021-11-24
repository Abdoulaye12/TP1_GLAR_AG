<?php
echo"Ce programme affichera les 10 nombres suivants par rapport a votre nombre \n";
$lecture = readline ("Donnez un nombre : ");

$stop = 0;
$stop = $lecture + 10;
echo"les 10 nombres suivants sont : \n";

while ($lecture <= $stop):
    echo $lecture."\n";
    $lecture++;
endwhile;