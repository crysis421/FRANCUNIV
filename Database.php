<?php

///on alloue un certain nombre de RAM pour ne pas surcharger la BDD, ainsi qu'un temps limite
ini_set('memory_limit', '512M');
ini_set('max_execution_time', 600);

///connection classique
class Database
{
    private $host = 'localhost';
    private$dbname = 'votreidentifiant_nomdelabase'; //TODO
    private$username = 'votreidentifiant_nomutilisateur'; //TODO
    private $password = 'votremotdepasse'; //TODO
    private $conn;

    public function getConnection()
    {
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        }catch(exception $e){
            echo 'Erreur : '.$e->getMessage();
        }
        return $this->conn;
    }


}