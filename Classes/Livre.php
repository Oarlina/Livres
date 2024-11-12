<?php

class Livre
{
    // Déclaration attributs
    private string $titre;
    private string $annee;
    private int $nbpage;
    private float $prix;
    private Auteur $auteur; // pour permettre a la calsse d'acceder a la classe Auteur


    // Créer un connexion à une base de données
    public function __construct (string $titre, string $annee, int $nbpage, float $prix, Auteur $auteur)
    {
        $this-> titre = $titre;
        $this-> annee = $annee;
        $this-> nbpage = $nbpage;
        $this-> prix = $prix;
        $this->auteur = $auteur;
        $auteur->addLivre($this); // permet a la fonction addLivre e prendre les infos de la classe livre

    }

    // getter et setter de titre
    public function getTitre() : string
    {
        return $this->titre;
    }
    public function setTitre(string $titre)
    {
        $this->titre=$titre;
        return $this;
    }

    // getter et setter de annee
    public function getAnnee() : string
    {
        return $this->annee;
    }
    public function setAnnee(string $annee)
    {
        $this->annee=$annee;
        return $this;
    }
    // getter et setter de nbpage
    public function getNbPage() : int
    {
        return $this->nbpage;
    }
    public function setNbPage(int $nbpage)
    {
        $this->nbpage=$nbpage;
        return $this;
    }
    // getter et setter de prix
    public function getPrix() : float
    {
        return $this->prix;
    }
    public function setPrix(float $prix)
    {
        $this->prix=$prix;
        return $this;
    }
    // getter et setter d'auteur
    public function getAuteur() 
    {
        return $this->auteur;
    }
    public function setAuteur($auteur)
    {
        $this->auteur=$auteur;
        return $this;
    }


    
    public function getInfos()
    {
        return $this." : ". $this->getNbPage()." pages / ".$this->getPrix()." €<br>";
    }
    public function __toString ()
    {
        return $this->getTitre()." (". $this->getAnnee().")";
    }
    
}

?>