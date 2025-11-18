<?php

class CompteBancaire {
    public $titulaire;
    public $solde;

    public function __construct($titulaire, $soldeInitial) {
        $this->titulaire = $titulaire;
        $this->solde = $soldeInitial;
        echo "✅ Compte créé pour {$this->titulaire} avec {$this->solde}€<br>";
    }

    public function deposer($montant) {
        $this->solde += $montant;
        echo "💰 Dépôt de {$montant}€<br>";
    }

    public function afficherSolde() {
        echo "💰 Solde de {$this->titulaire} : {$this->solde}€<br>";
    }
}

// --- TESTS ---

$compte1 = new CompteBancaire("Jean", 1000);
$compte1->deposer(200);
$compte1->afficherSolde();

$compte2 = new CompteBancaire("Marie", 500);
$compte2->deposer(200);
$compte2->afficherSolde();

