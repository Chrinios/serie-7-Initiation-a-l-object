<?php
    class City{

        //défini les objets ville et département.
        public $ville;
        public $departement;

        //le this permet d'utiliser les objets 
        public function afficher(){
            return "la ville $this->ville est dans le département $this->departement";
        }
        //on fait une surcharge car on définit et utilise le construct
        public function __construct($pVille,$pDepartement){
            $this->ville = $pVille;
            $this->departement = $pDepartement;
        }
    }
?>