<?php
require("Database.php");
// colonne univ
function addUnivFormation()
{
    $row = 0; //Nombre de ligne du CSV
    $addData = Database::connect();
    $requete = $addData->prepare("SELECT id,nom from universite");
    $requete->execute();
    $res = $requete->fetchAll();
    $lesUnivs = [];
    foreach ($res as $univ) {
        $lesUnivs[$univ['nom']] = $univ['id'];
    }
    $handle = fopen("fr-esr-parcoursup .csv", "r");
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { //Tant qu'il y a des données dans notre table
        try {
            if ($row != 0) { // On skip la premiere ligne qui sont juste le nom des colonnes
                $requete = $addData->prepare("UPDATE `formation` SET univ=:univ WHERE nom=:nom");
                $requete->bindParam(':nom', $data[4]);
                echo "Formation : ".$data[4];
                $requete->bindParam(':univ', $lesUnivs[$data[2]]);
                $requete->execute();
            }
            $row++;
            //On ferme la connection
        } catch (Exception $e) {
            echo $e->getMessage();
            echo "laa<br>";
        }
    }
    fclose($handle);
}
addUnivFormation();

