<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="LOGA.css">
    <script src="https://kit.fontawesome.com/26007f065f.js" crossorigin="anonymous"></script>
    <title>Nyx</title>
</head>
<body>

<img src="logo%20loga.png" alt="LOGA"/>

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
<a id="signup" href="login.html"><button class="button">Sign Up / Login </button></a>
<br><br><br><br><br><br>
<div id="profil">
    <img id="photo" src="profil%20image.png" alt="Photo de profil" />
    <p id="name">Name : </p>
    <p id="firstname">First Name :</p>
    <p id="age">Age :</p>
    <p id="email">Email :</p>

        </div>
<br><br><br><br>
<a></a>
<?php
        require "Database.php";
        $db = new Database();
        $db = $db->getConnection();
        $q = $db->query("SELECT * FROM users");
        $q ->execute();
        while ($user = $q -> fetch()){
            echo "id : ", $user['id']. "pseudo :" , $user['pseudo'];
        }


       ?>
</body>
