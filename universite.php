<?php session_start();
require('Database.php');
try {
    $database = Database::connect();
    $requete = $database->prepare("SELECT banniere,noteggmaps,ggmaps FROM universite WHERE nom=:nom");
    $requete->bindParam(':nom', $_GET['universite']);
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
<head>
    <link rel="stylesheet" href="LOGA.css">
    <script src="https://kit.fontawesome.com/26007f065f.js" crossorigin="anonymous"></script>
    <title>"<?= htmlspecialchars($_GET['universite']) ?>"</title>
</head>
<body>
<img src="logo-loga.png" alt="LOGA"/>
<img id="logo" src="url(<?= $requete['banniere'] ?>)" alt="LOGO"/>
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
<a id="noteggmaps" href="<?= $requete['ggmaps'] ?>" target="_blank">
    Note Google Maps :"<?= $requete['noteggmaps'] ?> <i class="fa-solid fa-star"></i>
</a>
<div id="presentation">
    <a> <?= $requete['presentation'] ?> </a>
</div>
<div id="membre">
    <a> <?= $requete['membre'] ?> </a>
</div>

<div id="avis">
    <div id="avistitre">Avis</div>
    <div class="messageBox">
        <div class="fileUploadWrapper">
            <label for="file">
                <i class="fa-solid fa-image"></i>
                </svg>
                <span class="tooltip">Add an image</span>
            </label>
            <input type="file" id="file" name="file"/>
        </div>
        <input required="" placeholder="Rediger un avis ..." type="text" id="messageInput"/>
        <button id="sendButton">
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>

</div>
</body>
