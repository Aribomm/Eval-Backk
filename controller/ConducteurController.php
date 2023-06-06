<?php

require_once "modele/ConducteurManager.php";

class ConducteurController
{
    private $conducteurManager;

    public function __construct()
    {
        $this->conducteurManager = new ConducteurManager();

    }

    public function getAllConducteurs()
    {
        $this->conducteurManager->loadconducteurs();
        return $this->conducteurManager->getconducteurs();
    }
    
    public function displayConducteurs()
    {
        $conducteurs = $this->conducteurManager->getConducteurs();
        require_once "view/home.view.php";
    }

    public function newConducteurForm()
    {
        require_once "view/new.conducteur.view.php";
    }

    public function newConducteurValidation()
    {
        $this->conducteurManager->newconducteurDB($_POST['nom'], $_POST['prenom']);
        header('Location: ' . URL . "conducteur");
    }

    public function editConducteurForm($id)
    {
        $conducteur = $this->conducteurManager->getconducteurById($id);
        require_once "view/edit.conducteur.view.php";
    }

    public function editConducteurValidation()
    {
        $this->conducteurManager->editconducteurDB($_POST['id-conducteur'], $_POST['nom'], $_POST['prenom']);
        header('Location:' . URL . "conducteurs");
    }

    public function deleteConducteur($id)
    {
        $this->conducteurManager->deleteconducteurDB($id);
        header('Location:' . URL . "conducteurs");
    }
}
