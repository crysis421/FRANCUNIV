<?php
require("Database.php");
echo "bonjour";
//On vérifie le bon envoie du fichier et le type du fichier

$row = 0; //Nombre de ligne du CSV
$u = 1;
$z = 0;

if (($handle = fopen("fr-esr-parcoursup.csv", "r")) !== FALSE) {
    $addData = Database::connect(); //Nouvelle connection pour ajouter toutes les données

    /*while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { //Tant qu'il y a des données dans notre table
        try {
            foreach ($data as $key => $value) {
                echo $key . "<br>";
                echo $value . "<br>";
            }
            echo "laa";
            if ($row != 0) { // On skip la premiere ligne qui sont juste le nom des colonnes
                echo "laa";
                $requete = $addData->prepare("Insert into formation(nom, univ) VALUES (:nom,:univ)");
                echo "laa";
                $requete->bindParam(':nom', $data[4]);
                echo "laa";
                $requete->bindParam(':univ', $data[2]);
                echo "laa";
                /*if ($data[0] == '¨Public') {
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
        } catch (Exception $e) {
            echo $e->getMessage();
            echo "laa<br>";
        }
}*/
//On ferme le fichier

}
$var = [[],[]];
if (($handle = fopen("fr-esr-parcoursup.csv", "r")) !== FALSE) {
    $addData = Database::connect(); //Nouvelle connection pour ajouter toutes les données
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        try {
            if (in_array($data[2], $var[0])) {

            } else {
                array_push($var[0], $data[2]);
                array_push($var[1], $data[3]);
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
}
foreach ($var as $var) {
    echo "nom" .$var[0] . "<br>";
    echo "univ" .$var[1] . "<br>";

}
fclose($handle);

