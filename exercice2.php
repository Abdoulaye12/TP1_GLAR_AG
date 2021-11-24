<?php

do{
    $lecture = readline ("Donnez un nombre compris entre 10 et 20 : ");

    if($lecture > 20){
    echo"Le nombre est trop grand \n";
    }
    else if($lecture < 10){
    echo"Le nombre est trop petit \n";
    }
    else{
        echo"Bravo";
    }
}
while($lecture > 20 || $lecture < 10);