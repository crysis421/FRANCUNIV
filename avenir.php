<?php
session_start();
require('Database.php');
if ($_SESSION['profile_image'] != null) {
    $avatar = 'uploads/avatars/' . $_SESSION['profile_image'];
} else {
    $avatar = 'profil-image.png';
}?>
<html>
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
<form id="formationacquis" method="get" action="avenir.php">
    <label>Veuillez entrée le nom de la formation : <br></label>
    <input type="text" name="entree" />
</form>
<?php require('menu.php') ?>
</html>