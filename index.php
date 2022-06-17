<?php 
    //ini_set('display_errors',false);
    require('personne.php');

    $personne = New Personne('Ducourneau','Vincent','Orléans');
    echo $personne;
    //Ne fonctionne pas quand mis en Private
    /*
        $personne->adresse = '21 Avenue Alain Savary, Orléans';
        echo $personne;
        $personne->setAdresse('Avenue');
        echo $personne;
    */
?>
