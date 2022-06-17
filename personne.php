<?php
    class Personne{

        public $nom;
        public $prenom;
        public $adresse;

        //on fait une surcharge car on définit et utilise le construct
        //le $p veut dire le paramètre
        public function __construct($pNom,$pPrenom,$pAdresse){
            $this->nom = $pNom;
            $this->prenom = $pPrenom;
            $this->adresse = $pAdresse;
        }
        
        public function __toString(){
            return "$this->prenom $this->nom habite: $this->adresse";
        }
        

        //Get heure
        public function getNom(){
            return $this->nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function getAdresse(){
            return $this->adresse;
        }

        //Set heure
        public function setNom(){
            return $this->nom;
        }
        public function setPrenom(){
            return $this->prenom;
        }
        public function setAdresse(){
            //Vérif ou calcul avant MAJ
            //Permet aussi d'afficher ou autre chose avant mise a jour, comme une notice ou autre
            if (strlen($pAdresse>10)){
                return $this->$pAdresse;
            }
        }
        
    }
?>