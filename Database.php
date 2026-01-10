<?php

///on alloue un certain nombre de RAM pour ne pas surcharger la BDD, ainsi qu'un temps limite
ini_set('memory_limit', '512M');
ini_set('max_execution_time', 600);

///connection classique
class Database
{
    private $host = "localhost";
    private $username = "hana2028_patatoufs";
    private $password = "RdAnFK2x436cMVp";
    private $conn;
    public function getConnection()
    {
        $this->conn = null;
        try {
            $dsn = "mysql:host=localhost;dbname=hana2028_LOGA;charset=utf8mb4"; //TODO
            $this->conn = new PDO($dsn, $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo "connected";
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
        return $this->conn;
    }
    public static function connect(){
        $d=new Database();
        $q=$d->getConnection();
        return $q;
    }
}

$q=Database::connect();
$S=$q->query("INSERT INTO user ( pseudo, email, password) VALUES ('pipi','pipi@gmail.com','pipi')");
$S->execute();
$R=$S->fetchAll();
foreach ($R as $r) {
    echo $r["pseudo"]."<br>";
}
echo "la";
?>