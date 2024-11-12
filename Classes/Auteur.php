<?php

class Auteur
{
    // Déclaration attributs
    private string $prenom;
    private string $nom;
    private array $livres;

    // Créer un connexion à une base de données
    public function __construct (string $prenom, string $nom)
    {
        $this-> prenom= $prenom;
        $this-> nom= $nom;
        $this-> livres= [];
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
    // getter et setter de livres
    public function getLivres() : array
    {
        return $this->livres;
    }
    public function setLivres(array $livres)
    {
        $this->livres = $livres;
        return $this;
    }

    public function addLivre(Livre $livre)
    {
        $this -> livres[] = $livre;
    }


    public function afficherBlibliographie()
    {
        $result = "<h3>Livres de $this</h3>";
       
        foreach($this->livres as $livre)
        {
            $result .= $livre->getInfos();
        }
        return $result;
    }
    public function __toString ()
    {
        return $this->prenom." ". $this->nom."<br>";
    }

}

?>