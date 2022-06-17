<?php
    public class City{

        //défini les objets ville et département.
        public $ville;
        public $departement

        //le this permet d'utiliser les objets 
        public function afficher():String{
            return "la ville $this->ville est dans le département $this->departement";
        }
    }
?>