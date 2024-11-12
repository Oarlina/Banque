<?php

class Compte
{
    private string $libelle;
    private float $solde;
    private string $deviseMonetaire;
    private string $titulaire;
    private float $credit;
    private float $debit;
    private float $montantVirement;

    public function __construct(string $libelle, float $solde, 
            string $deviseMonetaire, string $titulaire)
    {
        $this-> libelle = $libelle;
        $this-> solde = $solde;
        $this-> deviseMonetaire = $deviseMonetaire;
        $this-> titulaire = $titulaire;
    }
    
    // getter et setter de libelle
    public function getLibelle(): string
    {
        return $this->libelle;
    }
    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    } 
    // getter et setter de solde
    public function getSolde(): float
    {
        return $this->solde;
    }
    public function setSolde(float $solde): self
    {
        $this->solde = $solde;

        return $this;
    }
    // getter et setter de deviseMonetaire
    public function getDeviseMonetaire(): string
    {
        return $this->deviseMonetaire;
    }
    public function setDeviseMonetaire(string $deviseMonetaire): self
    {
        $this->deviseMonetaire = $deviseMonetaire;

        return $this;
    }
    // getter et setter de titulaire
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }
    public function setTitulaire(string $titulaire): self
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    public function crediter($credit)
    {
        $result = "<h4> Crédit sur $this</h4>";
        $this->solde += $credit;
        $result .= "Solde restant: ".$this->solde.$this->deviseMonetaire."<br>";
        return $result;
    }

    public function debiter($debit)
    {
        $result = "<h4> Débit sur $this</h4>";
        $this->solde -= $debit;
        $result .= "Solde restant: ".$this->solde.$this->deviseMonetaire."<br>";
        return $result;
    }
    //faire un virement d'un compte a à un compte b
    public function virement($compte,$montantVirement)
    {
        $result = "<h3> Virement de $this->libelle a $compte->libelle :</h3>";
        if ($this->solde >= $montantVirement)
        {
            $result .= $this->debiter($montantVirement);
            $result .= $compte->crediter($montantVirement);
            $result .= "<br>";   
            return $result;
        }
        else 
        {
            return $result."Virement pas possible.<br>";
        }
    }
    // fonction qui premet d'afficher les informations du compte
    public function getInfos()
    {
        $result = "<h3> Information du comptes $this:</h3> <ul>";
        $result .= "<li>".$this->libelle."</li><li>".$this->solde."</li>";
        $result .= "<li>".$this->deviseMonetaire."</li><li>".$this->titulaire." </li>";
        $result .= "</ul>";
        return $result;
    }

    public function __toString()
    {
        return $this->libelle.": ".$this->solde.$this->deviseMonetaire;
    }
}