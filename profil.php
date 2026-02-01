<?php
session_start();
if(!isset($_POST['idfondateur'])||!isset($_POST['idcofondateur'])){

}
elseif(!isset($_SESSION['email'])) {
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

<?php require('menu.php') ?>
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
            <input type="file" id="file" name="file" accept="image/*" required/>
            <br><br><br><br><br>

        </div>
        <button id="enregistrer" type="submit">Enregistrer</button>

    </form>
    <p id="name">Pseudo : <?= $_SESSION['pseudo'] ?></p>
    <p id="name">Email : <?= $_SESSION['email'] ?></p>
    <p id="name">Université : </p>
    <br><br><br><br>
</div>
<div id="commentaire">
    <a> Commentaires </a>
</div>
<div id="contact">
    <a> Contact </a>

</div>
<?php require('basdepage.php') ?>
</body>
