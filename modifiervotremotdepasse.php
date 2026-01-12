<?php
//Login
if(isset($_POST['oldpassword'])){
    require('Database.php');
    try{
        $database = Database::connect();
        $requete = $database->prepare("SELECT password FROM user WHERE id = :id");
        echo "la";
        $requete->bindParam(':id', $_SESSION['id']);
        echo "la";
        $requete->execute();
        $password= $requete->fetch();
        echo $password['password'];
        echo "la";
        if(password_verify($_POST['oldpassword'], $password['password'])){
            $res=$database ->prepare("UPDATE user SET password = :password WHERE id = :id");
            echo "la";
            $pass=password_hash($_POST['newpassword'], PASSWORD_DEFAULT);
            echo "la";
            $res->bindParam(':password', $pass );
            echo "la";
            $res->bindParam(':id', $_SESSION['id']);
            echo "la";
            $res->execute();
            echo "Password changed";
        } else{
                echo 'Wrong password';
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
    <title>Modifier votre mot de passe</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

</head>
<body>
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="modifier">
        <form action="modifiervotremotdepasse.php" method="post">
            <label for="chk" aria-hidden="true">Modifier votre mot de passe</label>
            <input type="text" name="oldpassword" placeholder="ancien mot de passe" required="">
            <input type="text" name="newpassword" placeholder="nouveau mot de passe" required="">
            <input type="submit" value="Modifier mot de passe" id="button">
        </form>
    </div>

</body>
</html>