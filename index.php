<?php 
    //ini_set('display_errors',false);
    require('ville.php');

    //Supprimer sa avec un constructeur "__construct"
    $City = New City('Bordeaux','Gironde');

    //Ancienne méthode
        //$City->ville = 'Bordeaux';
        //$City->departement = 'Gironde';
    echo $City->afficher();
?>