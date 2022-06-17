<?php 
    //ini_set('display_errors',false);
    require('ville.php');
    
    $City = New City();
    $City->ville = 'Bordeaux';
    $City->departement = 'Gironde';
    echo $City->afficher();
?>