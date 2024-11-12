<?php

class Compte 
{
    // Déclaration attributs
    private string $libelle;
    private float $solde;
    private string $deviseMonetaire;
    private Titulaire $titulaire; // lier a l'objet titulaire
    
    private $debit;
    // Créer un connexion à une base de données
    public function __construct (string $libelle, float $solde, string $deviseMonetaire, Titulaire $titulaire)
    {
        $this-> libelle= $libelle;
        $this-> solde= $solde;
        $this-> deviseMonetaire= $deviseMonetaire;
        $this-> titulaire= $titulaire;
    }
    // getter et setter de libelle
    public function getLibelle() : string
    {
        return $this->libelle;
    }
    public function setLibelle(string $libelle)
    {
        $this->libelle=$libelle;
        return $this;
    }
    // getter et setter de solde
    public function getSolde() : float
    {
        return $this->solde;
    }
    public function setSolde(float $solde)
    {
        $this->solde=$solde;
        return $this;
    }
    // getter et setter de deviseMonetaire
    public function getDeviseMonetaires() : string
    {
        return $this -> deviseMonetaire;
    }
    public function setDeviseMonetaire(string $deviseMonetaire)
    {
        $this->deviseMonetaire = $deviseMonetaire;
        return $this;
    }
    // getter et setter de titulaire
    public function getTitulaire() : Titulaire
    {
        return $this->titulaire;
    }
    public function setTitulaire(Titulaire $titulaire)
    {
        $this->titulaire=$titulaire;
        return $this;
    }



    public function addCompte()
    {
        $this -> comptes[] = $compte;
    }
    public function crediter(float $credit)
    {
        $result = $this."<br>Le compte va être créditer de: ".$credit.$this->deviseMonetaire.".<br>Nouveau solde: ";
        $this->solde += $credit;
        $result .= $this->solde.$this->deviseMonetaire."<br>";
        return $result;
    }
    public function debiter(float $debit)
    {
        $result = $this."<br>Le compte va être débiter de: ". $debit.$this->deviseMonetaire.".<br>Nouveau solde: ";
        $this->solde -= $debit;
        $result .= $this->solde. $this->deviseMonetaire ."<br>";
        return $result;
    }
    public function infoCompte()
    {
        $result= "<h3> Information $this</h3>";
        foreach ($comptes as $compte)
        {
            $result .= "<li>".$compte->getInfo()."</li>";
        }
        return $result;
    }
    public function getInfos()
    {
        return $this." ";
    }

    public function __toString()
    {
        return $this->libelle.": ". $this->solde.$this->deviseMonetaire."<br>-----------------";
    }
}

?>