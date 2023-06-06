<?php

class Manager
{
    private $bdd;

    public function __construct()
    {
       
        $host = "localhost";
        $dbname = "vtc";
        $username = "root";
        $password = "arnold";

        try {
            $this->bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function getBdd()
    {
        return $this->bdd;
    }
}
