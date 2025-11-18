<?php

class Utilisateur {
private static $compteur = 0;
private $nom;
private $id;

public function __construct($nom) {
    self::$compteur++;
    $this->id = self::$compteur;
    $this->nom = $nom;
    echo "✅ Utilisateur #{$this->id} créé : {$this->nom}<br>";
}


public static function getNombreUtilisateurs() {
    return self::$compteur;

}
public function afficher() {
    echo "👤 User #{$this->id} : {$this->nom}<br>";
}
}


$utilisateur1 = new Utilisateur("Jean");
$utilisateur2 = new Utilisateur("Marie");
$utilisateur3 = new Utilisateur("Paul");

echo "Nombre d'utilisateurs avant création : " . Utilisateur::getNombreUtilisateurs() . "<br>";
echo "Nombre d'utilisateurs après création : " . Utilisateur::getNombreUtilisateurs() . "<br>";

$utilisateur1->afficher();
$utilisateur2->afficher();
$utilisateur3->afficher();







// ─────────────────────────────────────────────────────────────────────────
// ✅ BRAVO ! Tu as terminé le Projet 09
// ─────────────────────────────────────────────────────────────────────────
//
// Tu as appris :
// ✅ Les propriétés et méthodes statiques partagées par tous les objets
// ✅ self:: pour accéder aux membres statiques
// ✅ Classe::methode() pour appeler sans instancier d'objet
//
// 🎯 Prochaine étape : Projet 10 - Namespaces (organisation du code)
//
?>
