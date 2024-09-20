<?php

class Livre {
    public $titre;
    public $isbn;
    public $auteurs; // Un tableau d'objets Auteur
}

class Auteur {
    public $nom;
    public $prenom;
}

$livre1 = new Livre();
$livre1->titre = "Le Petit Prince";
$livre1->isbn = "9782266000016";
$livre1->auteurs = [
    new Auteur("Saint-Exupéry", "Antoine de")
];


$json = json_encode($livre1, JSON_PRETTY_PRINT);
echo $json;

file_put_contents('ma_bibliotheque.json', $json);

$json = file_get_contents('ma_bibliotheque.json');
$livreLu = json_decode($json);
echo $livreLu->titre; // Affichera "Le Petit Prince"

/*// Fonction pour enregistrer un objet Livre dans un fichier JSON
function enregistrerLivreDansFichier(Livre $livre, string $fichier) {
    $json = json_encode($livre, JSON_PRETTY_PRINT);
    file_put_contents($fichier, $json);
}

// Fonction pour lire un objet Livre depuis un fichier JSON
function lireLivreDepuisFichier(string $fichier) : Livre {
    $json = file_get_contents($fichier);
    return json_decode($json);
}

// ... (code pour créer un objet Livre et l'enregistrer/lire)*/





?>