<?php

$mdp = readline('Entrer le mot de passe : ');



if (strlen($mdp) < 8){
    echo "Le mot de passe doit contenir au moins 8 caractères";
}

else{

    $tabMDP = str_split($mdp);
    $lesChiffres = [0,1,2,3,4,5,6,7,8,9];
    $okChiffre = false;

    foreach($tabMDP as $carac){
        if (in_array($carac, $lesChiffres)) {
            $okChiffre = true;
            break;
        }
    }

    if ($okChiffre == false){
        echo "Le mot de passe doit contenir au moins un chiffre";
        exit;
    }

    $lesMajuscules = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    $lesMinuscules = str_split("abcdefghijklmopqrstuvwxyz");
    $okMajuscules = false;
    $okMinuscules = false;

    while ($okMajuscules == false || $okMinuscules == false){
        foreach($tabMDP as $carac){
            if (in_array($carac, $lesMajuscules)) {
                $okMajuscules = true;
                break;
            }
        }
        foreach($tabMDP as $carac){
            if (in_array($carac, $lesMinuscules)) {
                $okMinuscules = true;
                break;
            }
        }
        if ($okMajuscules == false || $okMinuscules == false){
            echo "Le mot de passe doit contenir au moins une majuscule et une minuscule";
            exit;
        }
    }
    echo "Le mot de passe est correctement formé";
}
?>