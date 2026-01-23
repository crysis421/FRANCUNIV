<?php
require("Database.php");
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
$var = [];
$var1 = [];
$var2 = [];
if (($handle = fopen("fr-esr-parcoursup.csv", "r")) !== FALSE) {
    $addData = Database::connect(); //Nouvelle connection pour ajouter toutes les données
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if ($row != 0) {
            try {
                if (in_array($data[2], $var)) {

                } else {
                    array_push($var, $data[2]);
                    array_push($var1, $data[3]);
                    if ($data[0] == '¨Public') {
                        $e=1;
                    } else {
                        $e = 0;
                    }
                    array_push($var2, $e);

                }
            } catch (Exception $e) {
                echo $e;
            }
        }
        $row++;
    }
}
/*while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { //Tant qu'il y a des données dans notre table
    try {
        foreach ($data as $key => $value) {
            echo $key . "<br>";
            echo $value . "<br>";
        }
        echo "laa";
        if ($row != 0) { // On skip la premiere ligne qui sont juste le nom des colonnes
            echo "laa";
            $requete = $addData->prepare("Insert into universite(nom, region) VALUES (:nom,:region)");
            echo "laa";
            $requete->bindParam(':nom', $var);
            echo "laa";
            $requete->bindParam(':region', $var1);
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
    } catch (Exception $e) {
        echo $e->getMessage();
        echo "laa<br>";
    }

}*/
$r = 0;
foreach ($var as $var) {
    echo "<br>";
    echo "nom :" . $var . "<br>";
    echo "region :" . $var1[$r] . "<br>";
    echo "etat :" . $var2[$r] . "<br>";
    $r++;
}
fclose($handle);

