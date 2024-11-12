<?php

class Titulaire 
{
    private string $prenom;
    private string $nom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $comptes;
    public function __construct(string $prenom, string $nom,
            string $dateNaissance, string $ville)
    {
        $this-> prenom = $prenom;
        $this-> nom = $nom;
        $this-> dateNaissance =new DateTime($dateNaissance);
        $this-> ville = $ville;
        $this-> comptes = [];
    }
    //getter et setter prenom
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }
    //getter et setter nom
    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }
    //getter et setter date de naissance
    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }
    public function setDateNaissance(DateTime $dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }
    //getter et setter ville
    public function getVille(): string
    {
        return $this->ville;
    }
    public function setVille(string $ville): self
    {
        $this->ville = $ville;
        return $this;
    }
    //getter et setter comptes
    public function getComptes(): array
    {
        return $this->comptes;
    }
    public function setComptes(array $comptes): self
    {
        $this->comptes = $comptes;
        return $this;
    }

    // fonction pour afficher les informations du titulaire
    public function getInfos()
    {
        $result = "<h3> Information du titulaire $this:</h3> <ul>";
        $result .= "<li>".$this->prenom."</li><li>".$this->nom."</li>";
            $from =  $this ->dateNaissance; // recupere la date de naissance 
            $to = new DateTime(); // recupere la date du jour
            $age = $from->diff($to)->y; // calcule l'age du jour j
        $result .= "<li>".$this->dateNaissance->format('d-m-Y')."</li><li>".$age." ans</li><li>";
        $result .= $this->ville."</li>";
        $result .= "</ul>";
        return $result;
    }

    public function __toString ()
    {
        return $this->prenom." ".$this->nom;
    }
}