<?php
session_start();
//Sign Up
if(isset($_POST['pseudo'])){
    require('Database.php');
    try{
        $database = Database::connect();
        $pswd = password_hash($_POST['passwordSignUp'], PASSWORD_DEFAULT);
        $requete = $database->prepare("Insert into user(pseudo,password,email) values (:pseudo,:password,:email)");
        $requete->bindParam(':pseudo', $_POST['pseudo']);
        $requete->bindParam(':password', $pswd);
        $requete->bindParam(':email', $_POST['emailSignUp']);
        $requete->execute();
        echo 'Compte créé avec succès';
        $database = null;
    }catch (Exception $e){
        echo "Cette adresse email/pseudo est déjà utilisé";
        $database = null;
    }
}

//Login
if(isset($_POST['emailLogin'])){
    require('Database.php');
    try{
        $database = Database::connect();
        $requete = $database->prepare("SELECT * FROM user WHERE email = :email");
        $requete->bindParam(':email', $_POST['emailLogin']);
        $requete->execute();
        $res = $requete->fetch();
        if(isset($res)){
            if(password_verify($_POST['passwordLogin'],$res['password'])){
                $_SESSION['pseudo'] = $res['pseudo'];
                $_SESSION['email'] = $res['email'];
                session_write_close();
                header('Location: profil.php');
                exit();
            }
            else{
                echo 'Wrong password';
            }
        }
        else{
            echo 'Invalid email';
        }
        $database = null;
    }catch (Exception $e){
        echo $e->getMessage();
        $database = null;
    }
}

?>
<html>
<head>
    <title>Login/Sign Up</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

</head>
<body>
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup">
        <form action="login.php" method="post">
            <label for="chk" aria-hidden="true">Sign up</label>
            <input type="text" name="pseudo" placeholder="User name" required="">
            <input type="email" name="emailSignUp" placeholder="Email" required="">
            <input type="password" name="passwordSignUp" placeholder="Password" required="">
            <input type="submit" value="Sign Up" id="button">
        </form>
    </div>

    <div class="login">
        <form action="login.php" method="post">
            <label for="chk" aria-hidden="true">Login</label>
            <input type="email" name="emailLogin" placeholder="Email" required="">
            <input type="password" name="passwordLogin" placeholder="Password" required="">
            <input type="submit" value="Login" id="button">
        </form>
    </div>
</div>

</body>
</html>