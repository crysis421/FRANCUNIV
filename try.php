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
            foreach ($data as $key => $value) {
                echo $key . "<br>";
                echo $value . "<br>";
            }
            if ($row != 0) { // On skip la premiere ligne qui sont juste le nom des colonnes
                $requete = $addData->prepare("INSERT INTO universite(nom, region, etat) VALUES (:nom,:region,:etat)");
                echo "laa";
                $requete->bindParam(':nom', $data[2]);
                echo "laa";
                $requete->bindParam(':region', $data[3]);
                echo "laa";
                if ($data[0] == '¨Public') {
                    echo "laa";
                    $requete->bindParam(':etat', $u, PDO::PARAM_BOOL);
                    echo "laa";
                } else {
                    echo "laa";
                    $requete->bindParam(':etat', $z, PDO::PARAM_BOOL);
                    echo "laa";
                }
                echo "laa";
                $requete->execute();
                echo "laa";
            }
            $row++;
            //On ferme la connection
            $addData = null;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //On ferme le fichier

}
fclose($handle);

