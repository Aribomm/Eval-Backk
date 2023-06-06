<?php

require_once "Manager.php";
require_once "Vehicule.php";

class VehiculeManager extends Manager
{
    private $vehicules;

    public function addVehicule($vehicule)
    {
        $this->vehicules[] = $vehicule;
    }

    public function getVehicules()
    {
        return $this->vehicules;
    }

    public function loadVehicules()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM vehicules");
        $req->execute();

        while ($data = $req->fetch()) {
            $this->addVehicule(new Vehicule($data['id_vehicule'], $data['marque'], $data['modele'], $data['couleur'], $data['immatriculation']));
        }

        $req->closeCursor();
    }

    public function getAllVehicules()
    {
        return $this->vehicules;
    }

    public function newVehiculeDB($marque, $modele, $couleur, $immatriculation)
    {
        $req = $this->getBdd()->prepare("INSERT INTO vehicule (marque, modele, couleur, immatriculation) VALUES (?, ?, ?, ?)");
        $req->execute([$marque, $modele, $couleur, $immatriculation]);
        $req->closeCursor();
    }

    public function editVehiculeDB($id, $marque, $modele, $couleur, $immatriculation)
    {
        $req = $this->getBdd()->prepare("UPDATE vehicule SET marque = ?, modele = ?, couleur = ?, immatriculation = ? WHERE id_vehicule = ?");
        $req->execute([$marque, $modele, $couleur, $immatriculation, $id]);
        $req->closeCursor();
    }

    public function deleteVehiculeDB($id)
    {
        $req = $this->getBdd()->prepare("DELETE FROM vehicule WHERE id_vehicule = ?");
        $req->execute([$id]);
        $req->closeCursor();
    }

    public function getVehiculeById($id)
    {
        foreach ($this->vehicules as $vehicule) {
            if ($vehicule->getId() == $id) {
                return $vehicule;
            }
        }
        return null;
    }
}
