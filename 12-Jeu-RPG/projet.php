<?php

trait Attaquant {
    public function attaquer($cible) {
        if (!$this->estVivant) {
            echo "❌ {$this->nom} ne peut pas attaquer, il est mort.<br>";
            return;
        }
        if (!$cible->getEstVivant()) {
            echo "⚠️ {$cible->getNom()} est déjà mort !<br>";
            return;
        }

        $degats = $this->attaque;
        echo "⚔️ {$this->nom} attaque {$cible->getNom()} et inflige {$degats} dégâts !<br>";
        $cible->recevoirDegats($degats);
    }
}

abstract class Personnage {
    protected static $totalPersonnages = 0;
    protected $nom;
    protected $vie;
    protected $attaque;
    protected $estVivant = true;

    public function __construct($nom, $vie, $attaque) {
        self::$totalPersonnages++;
        $this->nom = $nom;
        $this->vie = $vie;
        $this->attaque = $attaque;
        echo "✨ {$this->nom} entre dans l'arène ! (Vie: {$this->vie}, Attaque: {$this->attaque})<br>";
    }

    public function getNom() {
        return $this->nom;
    }

    public function recevoirDegats($degats) {
        $this->vie -= $degats;
        if ($this->vie <= 0) {
            $this->estVivant = false;
            $this->vie = 0;
            echo "💀 {$this->nom} est KO !<br>";
        } else {
            echo "💔 {$this->nom} a {$this->vie} PV restants<br>";
        }
    }

    public function getEstVivant() {
        return $this->estVivant;
    }

    public static function getTotalPersonnages() {
        return self::$totalPersonnages;
    }

    abstract public function crier();
}

class Guerrier extends Personnage {
    use Attaquant;

    public function __construct($nom) {
        parent::__construct($nom, 100, 20);
    }

    public function crier() {
        echo "🗡️ POUR L'HONNEUR !<br>";
    }
}

class Mage extends Personnage {
    use Attaquant;

    public function __construct($nom) {
        parent::__construct($nom, 70, 35);
    }

    public function crier() {
        echo "🔮 PAR LA MAGIE !<br>";
    }

    public function sortSpecial($cible) {
        $degats = 50;
        echo "✨ {$this->nom} lance BOULE DE FEU ! 💥<br>";
        $cible->recevoirDegats($degats);
    }
}

class Archer extends Personnage {
    use Attaquant;

    public function __construct($nom) {
        parent::__construct($nom, 80, 25);
    }

    public function crier() {
        echo "🏹 TIR MORTEL !<br>";
    }
}

class Arene {
    public function combat($perso1, $perso2) {

        echo "<br><strong>⚔️ COMBAT : {$perso1->getNom()} VS {$perso2->getNom()}</strong><br><br>";

        $round = 1;

        while ($perso1->getEstVivant() && $perso2->getEstVivant()) {

            echo "🌀 <strong>Round $round</strong><br>";

            // PERSO 1 attaque
            $perso1->attaquer($perso2);
            if (!$perso2->getEstVivant()) {
                echo "<br>🏆 {$perso1->getNom()} remporte le combat !<br>";
                return $perso1;
            }

            // PERSO 2 attaque
            $perso2->attaquer($perso1);
            if (!$perso1->getEstVivant()) {
                echo "<br>🏆 {$perso2->getNom()} remporte le combat !<br>";
                return $perso2;
            }

            $round++;
            echo "<br>";
        }
    }
}


// --------------------

$perso1 = new Guerrier("Conan");
$perso2 = new Mage("Gandalf");
$perso3 = new Archer("Legolas");

$arene = new Arene();

// Premier combat
$gagnant1 = $arene->combat($perso1, $perso2);

// Si le gagnant est un mage → sort spécial
if ($gagnant1 instanceof Mage) {
    $gagnant1->sortSpecial($perso1);
}
