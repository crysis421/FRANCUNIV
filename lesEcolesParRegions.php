<?php session_start();
require('Database.php');
try {
    $database = Database::connect();
    $requete = $database->prepare("SELECT nom,banniere,etat FROM universite WHERE region=:region");
    $requete->bindParam(':region', $_GET['departement']);
    $requete->execute();
    $database = null;
} catch (Exception $e) {
    echo $e->getMessage();
    $database = null;
}
if ($_SESSION['profile_image'] != null) {
    $avatar = 'uploads/avatars/' . $_SESSION['profile_image'];
} else {
    $avatar = 'profil-image.png';
}
?>
<head xmlns="http://www.w3.org/1999/html">
    <link rel="stylesheet" href="LOGA.css">
    <script src="https://kit.fontawesome.com/26007f065f.js" crossorigin="anonymous"></script>
    <title>Regions</title>
</head>
<body>

<img src="logo-loga.png" alt="LOGA"/>
<a href="profil.php"><img id="pp" src="<?= htmlspecialchars($avatar) ?>" alt="Photo de profil"></a>
<nav role="navigation">
    <div id="menuToggle">
        <input type="checkbox"/>
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
            <a href="index.php">
                <i class="fa-solid fa-house"> &nbsp Home</i></a><br>
            <a href="classement.php">
                <i class="fa-solid fa-trophy"> &nbsp Classement</i></a><br>
            <a href="profil.php">
                <i class="fa-solid fa-user"> &nbsp Profil</i></a>
        </ul>
    </div>
</nav>
<div class="group">
    <svg viewBox="0 0 24 24" aria-hidden="true" class="search-icon">
        <g>
            <path
                    d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"
            ></path>
        </g>
    </svg>

    <input
            id="query"
            class="input"
            type="search"
            placeholder="Search..."
            name="searchbar"
    />
</div>

<script src="LOGA.js"></script>
<div class="radio-inputs" id="radio">
    <label class="radio">
        <input type="radio" name="radio" checked="" id="Tous">
        <span class="name">Tous</span>
    </label>
    <label class="radio">
        <input type="radio" name="radio" id="Public">
        <span class="name">Public</span>
    </label>

    <label class="radio">
        <input type="radio" name="radio" id="Privee">
        <span class="name">Privée</span>
    </label>
</div>
<div id="filtre">
    <i class="fa-solid fa-folder-open" id="imgDossier"></i>
    <div class="checkbox-inputs" id="filtrecheckbox">
        <label class="checkbox">
            <input type="checkbox" name="filtre" checked="" id="Licence">
            <span class="name">Licence</span><br>
        </label>
        <label class="checkbox">
            <input type="checkbox" name="filtre" id="BTS / BUT">
            <span class="name">BTS / BUT</span><br>
        </label>

        <label class="checkbox">
            <input type="checkbox" name="filtre" id="Master">
            <span class="name">Master </span><br>
        </label>

        <label class="checkbox">
            <input type="checkbox" name="filtre" id="CPGE">
            <span class="name">CPGE </span><br>
        </label>
    </div>
</div>
<?php
if (isset($_GET['departement'])) {
    echo "<br><br><br><h1> Region : " . $_GET['departement'] . '</h1>';

}

?>

<div id="liste">
    <ul id="liste">
        <?php foreach ($requete as $row) {
            ?>

            <form id="univ" action="universite.php" method="get" class="<?php if ($row['etat'] == 1) {
                echo htmlspecialchars("public");
            } else {
                echo htmlspecialchars("privee");
            } ?>">
                <a onclick="this.closest('form').submit();" class="nomecole"
                   onmouseover="this.style.backgroundImage = 'url(<?= htmlspecialchars($row['banniere']) ?>)'"
                   onmouseout="this.style.backgroundImage = ''">
                    <input type="hidden" name="universite" value="<?= htmlspecialchars($row['nom']) ?>"/>
                    <?= htmlspecialchars($row['nom']) ?><br><br><br><br>
                </a>
            </form>
        <?php } ?>
    </ul>
</div>
<div id="basdepage">

    <a><br>Les universités et formations proviennent du site data.gouv.
        <br>Les dossiers dates de 2026 (sauf master qui date de 2022).<br>
        Pour toute demande d'ajout d'universités/formations,<br>
        merci de contacter le support par mail </a>
    <p id="support">Support: support@loga-univ.fr</p>
    <p id="auteurs">Auteurs:<br>
        <br>
        Romain Henry : Fondateur <br>
        Kilian Stievenard : Co-fondateur</p>
</div>
<script src="lesEcolesParRegions.js"></script>
</body>