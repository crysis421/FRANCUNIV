<?php
require("Database.php");
echo "bonjour";
//On vérifie le bon envoie du fichier et le type du fichier

$row = 0; //Nombre de ligne du CSV
$u = 1;
$z = 0;

if (($handle = fopen("fr-esr-parcoursup.csv", "r")) !== FALSE) {
    $addData = Database::connect(); //Nouvelle connection pour ajouter toutes les données

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { //Tant qu'il y a des données dans notre table
        try {
            if ($row == 0) { // On skip la premiere ligne qui sont juste le nom des colonnes
                $requete = $addData->prepare("INSERT INTO universite( `nom`, `region`, `etat`) VALUES (:nom,:region,:etat)");
                $requete->bindParam(':nom', $data[3]);
                $requete->bindParam(':region', $data[6]);
                if ($data[1] == '¨Public') {
                    $requete->bindParam(':etat', $u, PDO::PARAM_BOOL);
                } else {
                    $requete->bindParam(':etat', $z, PDO::PARAM_BOOL);
                }
                $requete->execute();
            }
            $row++;
            //On ferme la connection
            $addData = null;
            //On ferme le fichier
            fclose($handle);
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
}
}

