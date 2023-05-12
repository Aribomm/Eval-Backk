<?php
require_once "manager.php";
require_once "game.php";

// objectif : ajouter des jeux à un liste
class GameManager extends Manager
{

    private $games;

    public function addGame($game)
    {
        $this->games[] = $game;
    }

    public function getGames()
    {
        return $this->games;
    }

    public function loadGames()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM gamex");
        $req->execute();
        $myGames = $req->fetchAll();
        $req->closeCursor();

        // echo "<pre>";
        // print_r($myGames);
        // echo "</pre>"; 


        foreach ($myGames as $game) {
            $g = new Game($game['id'], $game['title'], $game['nr_players']);
            $this->addGame($g);
        }
    }

    public function newGameDB($title, $nbPlayers)
    {
        $req = "INSERT INTO gamex (Title, nr_players)
              Values (:title, :nbPlayers)";
        $statement = $this->getBDD()->prepare($req);
        $statement->bindValue(":title", $title, PDO::PARAM_STR);
        $statement->bindValue(":nbPlayers", $nbPlayers, PDO::PARAM_INT);
        $result = $statement->execute();
        $statement->closeCursor();
        if ($result) {
            $game = new Game($this->getBdd()->lastInsertId(), $title, $nbPlayers);
            $this->addGame($game);
        }
    }


    public function getGameById($id)
    {
        foreach ($this->games as $game) {
            if ($game->getId() == $id) {
                return $game;
            }
        }
    }
    public function editGameDB($id,$title,$nbPlayers){
        $req = "UPDATE gamex SET title = :title, nr_players = :nbPlayers 
        WHERE id = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id",$id, PDO::PARAM_INT);
        $statement->bindValue(":title",$title, PDO::PARAM_STR);
        $statement->bindValue(":nbPlayers",$nbPlayers, PDO::PARAM_INT);
        $result = $statement->execute();
        $statement->closeCursor();

        if($result){
            $this->getGameById($id)->setTitle($title);
            $this->getGameById($id)->setNbPlayers($nbPlayers);
        }
    }

    public function deleteGameDB($id){
        $req = "DELETE FROM gamex WHERE id = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id",$id, PDO::PARAM_INT);
        $result = $statement->execute();
        $statement->closeCursor();
        if ($result){
            $game = $this->getGameById($id);
            unset($game);
        }
    }
}
