<?php 
    //ini_set('display_errors',false);
    require('ville.php');
    
    $City = New City();
    $City->nom = 'Bordeaux';
    $City->departement = 'Gironde';
    echo $City->afficher();
?>