<?php

abstract class Forme {
    protected $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    abstract public function calculerAire();

    public function afficher() {
        $aire = $this->calculerAire();
        echo "La forme {$this->nom} a une aire de {$aire}.<br>";
    }
}

class Cercle extends Forme {
    private $rayon;

    public function __construct($rayon) {
        parent::__construct("Cercle");
        $this->rayon = $rayon;
    }

    public function calculerAire() {
        return pi() * $this->rayon * $this->rayon;
    }
}
class Rectangle extends Forme {
    private $largeur;
    private $hauteur;

    public function __construct($largeur, $hauteur) {
        parent::__construct("Rectangle");
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    public function calculerAire() {
        return $this->largeur * $this->hauteur;
    }
}

$cercle = new Cercle(5);
$cercle->afficher();

$rectangle = new Rectangle(10, 20);
$rectangle->afficher();

$forme = new Forme ("Test");

