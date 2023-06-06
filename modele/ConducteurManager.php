<?php

require_once "Manager.php";
require_once "Conducteur.php";

class ConducteurManager extends Manager
{
    private $conducteurs;

    public function addconducteur($conducteur)
    {
        $this->conducteurs[] = $conducteur;
    }

    public function getconducteurs()
    {
        return $this->conducteurs;
    }
    
    public function loadconducteurs()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM conducteur");
        $req->execute();
        
        while ($data = $req->fetch()) {
            
            $this->addconducteur(new Conducteur($data['id_conducteur'], $data['nom'], $data['prenom']));
        }
        
        $req->closeCursor();
    }
    public function getAllConducteurs()
{
    return $this->conducteurManager->getconducteurs();
}


    public function newconducteurDB($nom, $prenom)
    {
        $req = $this->getBdd()->prepare("INSERT INTO conducteur (nom, prenom) VALUES (?, ?)");
        $req->execute(array($nom, $prenom));
        $req->closeCursor();
    }

    public function editconducteurDB($id, $nom, $prenom)
    {
        $req = $this->getBdd()->prepare("UPDATE conducteur SET nom = ?, prenom = ? WHERE id = ?");
        $req->execute(array($nom, $prenom, $id));
        $req->closeCursor();
    }

    public function deleteconducteurDB($id)
    {
        $req = $this->getBdd()->prepare("DELETE FROM conducteur WHERE id = ?");
        $req->execute(array($id));
        $req->closeCursor();
    }

    public function getconducteurById($id)
    {
        foreach ($this->conducteurs as $conducteur) {
            if ($conducteur->getId() == $id) {
                return $conducteur;
            }
        }
        return null;
    }
}
