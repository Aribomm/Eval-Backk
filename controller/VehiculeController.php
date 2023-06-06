<?php

require_once "Manager.php";
require_once "Vehicule.php";
require_once "modele/VehiculeManager.php";


class VehiculeController
{
    private $vehiculeManager;

    public function __construct()
    {
        $this->vehiculeManager = new VehiculeManager();
    }

    public function getAllVehicules()
    {
        return $this->vehiculeManager->getVehicules();
    }

    public function displayVehicules()
{
    $vehicules = $this->getAllVehicules();
    require_once "view/vehicule.view.php";
}


    public function editVehiculeForm($id)
    {
        $vehicule = $this->vehiculeManager->getVehiculeById($id);
        require_once "view/edit.vehicule.view.php";
    }

    public function editVehiculeValidation()
    {
        $id = $_POST['id_vehicule'];
        $marque = $_POST['marque'];
        $modele = $_POST['modele'];
        $couleur = $_POST['couleur'];
        $immatriculation = $_POST['immatriculation'];

        $this->vehiculeManager->editVehiculeDB($id, $marque, $modele, $couleur, $immatriculation);
        header('Location:' . URL . "vehicules");
    }

    public function deleteVehicule($id)
    {
        $this->vehiculeManager->deleteVehiculeDB($id);
        header('Location:' . URL . "vehicules");
    }
}
