<?php

class Voiture {
    public $marque;
    public $couleur;
    public $vitesseMax;

    public function __construct($marque, $couleur, $vitesseMax) {
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->vitesseMax = $vitesseMax;
    }

    public function demarrer() {
        echo "🚗 Vrooooom ! La {$this->marque} démarre !<br>";
    }

    public function klaxonner() {
        echo "🎺 POUET POUET ! ({$this->couleur})<br>";
    }

    public function afficherVitesseMax() {
        echo "Vitesse Max : {$this->vitesseMax} km/h<br>";
    }

    public function afficherInfos() {
        echo "Marque : {$this->marque}, Couleur : {$this->couleur}, Vitesse max : {$this->vitesseMax} km/h<br>";
    }
}

// -------- TEST --------

$voiture1 = new Voiture("Ferrari", "rouge", 320);
$voiture1->demarrer();

$voiture2 = new Voiture("Renault Twingo", "jaune", 150);
$voiture2->klaxonner();
$voiture2->afficherInfos();

