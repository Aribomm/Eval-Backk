<?php

class Vehicule
{
    private $id;
    private $marque;
    private $modele;
    private $couleur;
    private $immatriculation;

    public function __construct($id, $marque, $modele, $couleur, $immatriculation)
    {
        $this->id = $id;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        $this->immatriculation = $immatriculation;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function getImmatriculation()
    {
        return $this->immatriculation;
    }
}
