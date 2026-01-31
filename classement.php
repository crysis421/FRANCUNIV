<?php
session_start();
if ($_SESSION['profile_image'] != null) {
    $avatar = 'uploads/avatars/' . $_SESSION['profile_image'];
} else {
    $avatar = 'profil-image.png';
}
?><!DOCTYPE html>
<head>
    <link rel="stylesheet" href="LOGA.css">
    <script src="https://kit.fontawesome.com/26007f065f.js" crossorigin="anonymous"></script>
    <title>Classement</title>
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
            <a href="classement.html">
                <i class="fa-solid fa-trophy"> &nbsp Classement</i></a><br>
            <a href="profil.php">
                <i class="fa-solid fa-user"> &nbsp Profil</i></a>
            <a href="modifiervotremotdepasse.php">
                <i class="fa-solid fa-gear"> &nbsp Parametre</i></a>
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
<div id="pb"> <li><a href="Univ1">    Paris Science et Lettres </a></li>
<li>    Paris-Saclay </li>
<li>    Polytechnique(X) </li>
<li>    Sorbonne </li>

</div>
<div id="basdepage">
    <p id="auteurs">Auteurs:<br>
        <br>
        Fondateur : Romain Henry  <br>
        Co-fondateur : Kilian Stievenard </p>

    <p id="support">Support: support@loga-univ.fr</p>
    <h6 id="condition">Les universités et formations proviennent du site data.gouv.
        <br>Les dossiers dates de 2026 (sauf master qui date de 2022).<br>
        Pour toute demande d'ajout d'universités/formations,<br>
        merci de contacter le support par mail </h6>
</div>
</body>