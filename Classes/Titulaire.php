<?php

class Titulaire 
{
    // Déclaration attributs
    private string $prenom;
    private string $nom;
    private DateTime $dateDeNaissance;
    private string $ville;
    private array $comptes;


    // Créer un connexion à une base de données
    public function __construct (string $prenom, string $nom, string $dateDeNaissance, string $ville)
    {
        $this-> prenom= $prenom;
        $this-> nom= $nom;
        $this-> dateDeNaissance= new DateTime($dateDeNaissance);
        $this-> ville= $ville;
        $this-> comptes = [];
    
    }

    // getter et setter de prenom
    public function getPrenom() : string
    {
        return $this->prenom;
    }
    public function setPrenom(string $prenom)
    {
        $this->prenom=$prenom;
        return $this;
    }
    // getter et setter de nom
    public function getNom() : string
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom=$nom;
        return $this;
    }
    // getter et setter de dateDeNaissance
    public function getdateDeNaissances() : string
    {
        return $this->dateDeNaissance;
    }
    public function setDateDeNaissance(string $dateDeNaissance)
    {
        $this->dateDeNaissance=$dateDeNaissance;
        return $this;
    }
    // getter et setter de ville
    public function getVille() : string
    {
        return $this->ville;
    }
    public function setVille(string $ville)
    {
        $this->ville=$ville;
        return $this;
    }
    // getter et setter de EnsembleCompteBancaire
    public function getcomptes() : string
    {
        return $this->comptes;
    }
    public function setcomptes(string $comptes)
    {
        $this->comptes=$comptes;
        return $this;
    }



    public function infoTitulaire()
    {
        $result= "<h3> Information $this</h3>";
        $from =  $this ->dateDeNaissance; // recupere la date de naissance 
        $to = new DateTime(); // recupere la date du jour
        $age = $from->diff($to); // calcule l'age du jour j
        
        $result.= "Prenom: ".$this->prenom." <br> Nom:".$this->nom."<br>Date de naissance: ".$this->dateDeNaissance->format('d-m-Y')." <br> Âge: ".$age->format('y')." <br> Ville: ".$this->ville."<br>";
        var_dump($age);
        return $result;
    }
    public function __toString()
    {
        return $this->prenom." ". $this->nom."<br>";
    }
}

?>