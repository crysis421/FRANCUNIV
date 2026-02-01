<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
} ?>

<html>
<head>
    <link rel="stylesheet" href="LOGA.css">
    <script src="https://kit.fontawesome.com/26007f065f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap">

</head>
<body>
<?php require('menu.php') ?>
<div id="parametre">
    <ul><h2>Parametres</h2>
        <a id="modifiervotremotdepasse" href="modifiervotremotdepasse.php">Modifier votre mot de passe </a></p></ul>

</div>
</body>
</html>