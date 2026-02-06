<?php
session_start();
require('Database.php');
$entree=$_POST['entree'];
try {
    $database = Database::connect();
    $requete = $database->prepare("SELECT * FROM formation WHERE nom LIKE CONCAT('%', :nom, '%')");
    $requete->bindParam(':nom', $_POST['entree']);
    $requete->execute();
    $requete = $requete->fetchAll();
    $formations = [];
    foreach ($requete as $row) {
        $formations[$row['nom']] = $requete->fetchAll();
    }
    $database = null;
} catch (Exception $e) {
    echo $e->getMessage();
    $database = null;
}
if ($_SESSION['profile_image'] != null) {
    $avatar = 'uploads/avatars/' . $_SESSION['profile_image'];
} else {
    $avatar = 'profil-image.png';
}?>
<html>
<script>src="avenir.js"</script>
<head xmlns="http://www.w3.org/1999/html">
    <link rel="stylesheet" href="LOGA.css">
    <script src="https://kit.fontawesome.com/26007f065f.js" crossorigin="anonymous"></script>
    <title>Regions</title>
</head>
<body>

<img src="logo-loga.png" alt="LOGA"/>
<a href="profil.php"><img id="pp" src="<?= htmlspecialchars($avatar) ?>" alt="Photo de profil"></a>

<div id="presentation2">
    <p>Sur cette page vous pouvait mettre la formation que vous avez et vous pouvez voir tout<br>
        les formations qui accepte des gens avec cette formation</p>
</div>
<form id="formationacquis" method="post" action="avenir.php">
    <label>Veuillez entrée le nom de la formation : <br></label>
    <input id="entree" type="text" name="entree" />
</form>
<div id="liste1">
    <ul id="liste1">
        <?php
        foreach ($requete as $row) {
            ?>

            <form id="univ" action="universite.php" method="get" >
                <a onclick="this.closest('form').submit();" class="nomecole"
                    <input type="hidden" name="universite" value="<?= htmlspecialchars($row['nom']) ?>"/>
                    <p><?= htmlspecialchars($row['nom']) ?></p><br><br><br><br>
                </a>
            </form>
        <?php } ?>
    </ul>
</div>
<?php require('menu.php') ?>
</html>