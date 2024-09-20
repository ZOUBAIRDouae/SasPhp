<?php
class Etudiant {
    private $id;
    private $nom;
    /** @var Cours[] */
    private $cours = [];

    // ... getters et setters ...

    public function ajouterCours(Cours $cours): void {
        $this->cours[] = $cours;
        $cours->ajouterEtudiant($this);
    }
}

class Cours {
    private $id;
    private $nom;
    /** @var Etudiant[] */
    private $etudiants = [];

    // ... getters et setters ...

    public function ajouterEtudiant(Etudiant $etudiant): void {
        $this->etudiants[] = $etudiant;
    }
}
