<?php

do{
$lecture = readline ("Donnez un nombre compris entre 1 et 3 : ");
if($lecture >=1 && $lecture <=3 )
echo'Bravo';
}
while($lecture <1 || $lecture >3);