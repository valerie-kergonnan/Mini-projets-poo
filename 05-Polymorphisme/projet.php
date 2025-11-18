<?php

class Instrument {
    protected $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function jouer() {
        echo "🎵 {$this->nom} joue de la musique...<br>";
    }
}

class Guitare extends Instrument {
    public function jouer() {
        echo "🎸 {$this->nom} : GLING GLING GLING ♪<br>";
    }
}

class Piano extends Instrument {
    public function jouer() {
        echo "🎹 {$this->nom} : PLONK PLONK PLONK ♫<br>";
    }
}

class Batterie extends Instrument {
    public function jouer() {
        echo "🥁 {$this->nom} : BOOM BOOM CRASH ♪♫<br>";
    }
}


$guitare = new Guitare ("fender");
$guitare->jouer();

$piano = new Piano ("Roland");
$piano->jouer();

$batterie = new Batterie ("pearl");
$batterie->jouer();


foreach (['Guitare', 'Piano', 'Batterie'] as $classe) {
    
    $instrument = new $classe($classe);
    $instrument->jouer();
}



// ─────────────────────────────────────────────────────────────────────────
// TODO 4 : Créer un orchestre et tester
// ─────────────────────────────────────────────────────────────────────────
//
// Crée un tableau $orchestre avec :
// - Une guitare "Fender"
// - Un piano "Yamaha"
// - Une batterie "Pearl"
//
// Fais une boucle qui fait jouer tous les instruments
//
// Indice :
// foreach ($orchestre as $instrument) {
//     $instrument->jouer();
// }




// ─────────────────────────────────────────────────────────────────────────
// ✅ BRAVO ! Tu as terminé le Projet 05
// ─────────────────────────────────────────────────────────────────────────
//
// Tu as appris :
// ✅ Le polymorphisme : redéfinir une méthode dans chaque enfant
// ✅ Traiter différents objets de la même manière dans une boucle
// ✅ Override (redéfinition) des méthodes parentes
//
// 🎯 Prochaine étape : Projet 06 - Classes Abstraites (forcer l'implémentation)
//
?>
