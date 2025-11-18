<?php

class Portefeuille {
    // Propriétés privées
    private $proprietaire;
    private $argentDisponible;

    // Constructeur
    public function __construct($proprietaire, $argentInitial) {
        $this->proprietaire = $proprietaire;
        $this->argentDisponible = $argentInitial;
        echo " Portefeuille créé pour {$this->proprietaire} avec {$this->argentDisponible}€<br>";
    }

    // Getter pour lire l'argent disponible
    public function getArgent() {
        return $this->argentDisponible;
    }

    // Méthode pour ajouter de l'argent
    public function ajouterArgent($montant) {
        if ($montant > 0) {
            $this->argentDisponible += $montant;
            echo "✅ Ajout de {$montant}€<br>";
        } else {
            echo "❌ Montant invalide !<br>";
        }
    }

    // Méthode pour retirer de l'argent
    public function retirerArgent($montant) {
        if ($montant > 0) {
            if ($montant <= $this->argentDisponible) {
                $this->argentDisponible -= $montant;
                echo "✅ Retrait de {$montant}€<br>";
            } else {
                echo "❌ Fonds insuffisants !<br>";
            }
        } else {
            echo "❌ Montant invalide !<br>";
        }
    }
}

$monPortefeuille = new Portefeuille("Valerie", 100);
echo "Argent initial : " . $monPortefeuille->getArgent() . "€<br>";
$monPortefeuille->ajouterArgent(50);
$monPortefeuille->retirerArgent(30);
$monPortefeuille->retirerArgent(500);
$monPortefeuille->ajouterArgent(-20);
echo "Argent final : " . $monPortefeuille->getArgent() . "€<br>";
