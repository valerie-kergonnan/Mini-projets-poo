<?php

trait Nageable {
    public function nager() {
        echo "🏊 {$this->nom} nage comme un poisson !<br>";
    }
}
trait Volant {
    public function voler() {
        echo "🦅 {$this->nom} vole dans les airs !<br>";
    }
}
trait Invisible {
    public function seRendreInvisible() {
        echo "👻 {$this->nom} devient invisible !<br>";
    }
}

class Guerrier {
    use Nageable;

    public $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function attaquer() {
        echo "⚔️ {$this->nom} attaque avec son épée !<br>";
    }
}

class Magicien {
    use Nageable, Volant, Invisible;

    public $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function lancerSort() {
        echo "🔮 {$this->nom} lance un sort !<br>";
    }
}

$guerrier = new Guerrier("Conan");
$magicien = new Magicien("Gandalf");

$guerrier->attaquer();
$guerrier->nager();

$magicien->lancerSort();
$magicien->voler();
$magicien->nager();
$magicien->seRendreInvisible();




// ─────────────────────────────────────────────────────────────────────────
// TODO 4 : Créer et tester des personnages
// ─────────────────────────────────────────────────────────────────────────
//
// Crée :
// - Un guerrier "Conan"
// - Un magicien "Gandalf"
//
// Pour le guerrier, teste :
// - attaquer()
// - nager() (du trait !)
//
// Pour le magicien, teste :
// - lancerSort()
// - voler()
// - nager()
// - seRendreInvisible()




// ─────────────────────────────────────────────────────────────────────────
// ✅ BRAVO ! Tu as terminé le Projet 08
// ─────────────────────────────────────────────────────────────────────────
//
// Tu as appris :
// ✅ Les traits : morceaux de code réutilisables comme des LEGO
// ✅ Le mot-clé use pour "clipser" des compétences
// ✅ Combiner plusieurs traits dans une seule classe
//
// 🎯 Prochaine étape : Projet 09 - Static (propriétés et méthodes partagées)
//
?>
