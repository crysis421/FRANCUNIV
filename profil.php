<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="LOGA.css">
    <script src="https://kit.fontawesome.com/26007f065f.js" crossorigin="anonymous"></script>
    <title>Profil</title>
</head>
<body>
<img src="logo-loga.png" alt="LOGA"/>

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
<a id="signup" href="login.php">
    <button class="button">Sign Up / Login</button>
</a>
<br><br><br><br><br><br>
<div id="profil">
    <form action="upload_avatar.php" method="post" enctype="multipart/form-data">
        <div id="photo" class="fileUploadWrapper">
            <label for="file">
                <?php
                if ($_SESSION['profile_image'] != null) {
                    $avatar = 'uploads/avatars/' . $_SESSION['profile_image'];
                } else {
                    $avatar = 'profil-image.png';
                } // image par défaut si pas encore de photo
                ?>
                <img src="<?= htmlspecialchars($avatar) ?>" alt="Photo de profil"
                     style="width:120px;height:120px;border-radius:50%;">
                </svg>
                <span class="tooltip">Add an image</span>
            </label>
            <input type="file" id="file" name="file"/>
            <br><br><br><br><br>

        </div>
        <button id="enregistrer" type="submit">Enregistrer</button>

    </form>
    <p id="name">Pseudo : <?= $_SESSION['pseudo'] ?></p>
    <p id="email">Email : <?= $_SESSION['email'] ?></p>
    <a id="modifiervotremotdepasse" href="modifiervotremotdepasse.php">Modifier votre mot de passe </a>
    <br><br><br><br>
    <a></a>
</body>
