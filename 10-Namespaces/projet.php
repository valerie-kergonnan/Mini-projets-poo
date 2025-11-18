<?php

namespace MonApp\Models {
class User {
    private $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function afficher() {
        echo "👤 Modèle User : {$this->nom}<br>";
    }
}
}
namespace MonApp\Controllers {
class UserController {
    public function index() {
        echo "📋 Liste des utilisateurs<br>";
    }
}
}
namespace {
    // Utilisation des classes avec leur chemin complet
    $user = new \MonApp\Models\User("Jean");
    $controller = new \MonApp\Controllers\UserController();

    $user->afficher();
    $controller->index();

    
    use MonApp\Models\User as UserModel;
    use MonApp\Controllers\UserController as UserCtrl;

    $user2 = new UserModel("Marie");
    $controller2 = new UserCtrl();

    $user2->afficher();
    $controller2->index();
}







// ─────────────────────────────────────────────────────────────────────────
// TODO 3 : Utiliser les classes avec leur chemin complet
// ─────────────────────────────────────────────────────────────────────────
//
// IMPORTANT : Pour revenir au namespace global, utilisez :
// namespace {
//     // Code ici
// }
//
// Crée un objet User avec le chemin complet :
// $user = new \MonApp\Models\User("Jean");
//
// Crée un objet UserController :
// $controller = new \MonApp\Controllers\UserController();
//
// Teste les méthodes.




// ─────────────────────────────────────────────────────────────────────────
// TODO 4 : Utiliser 'use' pour simplifier
// ─────────────────────────────────────────────────────────────────────────
//
// Au lieu d'écrire le chemin complet à chaque fois,
// utilisez 'use' :
//
// use MonApp\Models\User;
// use MonApp\Controllers\UserController;
//
// Puis crée les objets simplement :
// $user2 = new User("Marie");
// $controller2 = new UserController();




// ─────────────────────────────────────────────────────────────────────────
// ✅ BRAVO ! Tu as terminé le Projet 10
// ─────────────────────────────────────────────────────────────────────────
//
// Tu as appris :
// ✅ Les namespaces pour organiser le code en dossiers logiques
// ✅ Éviter les conflits de noms entre classes
// ✅ Utiliser 'use' pour simplifier les imports
//
// 🎯 Prochaine étape : Projet 11 - Autoload (chargement automatique)
//
?>
