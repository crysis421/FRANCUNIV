<?php session_start();
require('Database.php');
try {
    $database = Database::connect();
    $requete = $database->prepare("SELECT banniere,ggmaps FROM universite WHERE nom=:nom");
    $requete->bindParam(':nom', $_GET['universite']);
    $requete->execute();
    $database = null;
    $universite = $requete->fetch(PDO::FETCH_ASSOC);
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
<a id="ggmaps" href="<?= $universite['ggmaps'] ?>" target="_blank">Adresse de l'université
    </a>
<div id="presentation">
    <p id="presentation">Vous voici sur la page de <?= htmlspecialchars($_GET['universite']) ?> .<br>
        Sur cette page vous pourrez voir toutes les formations proposer par<?= htmlspecialchars($_GET['universite']) ?>
        , ainsi que les personnes qui y étudient <br>
        De plus une page "Annonce" est mis à disposition pour toute personne de l'université qui le souhaitent. Vous
        pourriez aussi noter et donner votre avis <br>
        sur l'université uniquement si vous y êtes inscrit.
    </p>
</div>
<div id="membre">
    <a></a>
</div>
<div id="annonce">
    <div id="annoncetitre">Annonce</div>
</div>
<div id="listeformation">
    <div id="annonceformation">Formation</div>
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
