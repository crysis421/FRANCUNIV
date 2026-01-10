<?/*php
session_start();
if(!isset($_SESSION['email'])){
header('Location: login.php');
exit();}*/
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
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
            <a href="index.html">
                <i class="fa-solid fa-house">  &nbsp Home</i></a><br>
            <a href="classement.html">
                <i class="fa-solid fa-trophy"> &nbsp Classement</i></a><br>
            <a href="profil.php">
                <i class="fa-solid fa-user"> &nbsp Profil</i></a>
        </ul>
    </div>
</nav>
<a id="signup" href="login.php"><button class="button">Sign Up / Login </button></a>
<br><br><br><br><br><br>
<div id="profil">
    <div id ="photo" class="fileUploadWrapper">
        <label for="file">
            <img id="photo" src="profil%20image.png" alt="Photo de profil" />
            </svg>
            <span class="tooltip">Add an image</span>
        </label>
        <input type="file" id="file" name="file" />
    </div>
    <p id="name">Pseudo : <?=$_SESSION['pseudo']?></p>
    <p id="firstname">First Name :</p>
    <p id="age">Age :</p>
    <p id="email">Email : <?=$_SESSION['email']?></p>
<br><br><br><br>
<a></a>
</body>
