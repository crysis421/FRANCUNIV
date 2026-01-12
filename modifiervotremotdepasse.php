<?php
//Login
if(isset($_POST['password'])){
    require('Database.php');
    try{
        $database = Database::connect();
        $requete = $database->prepare("SELECT password FROM user WHERE id = :id");
        $requete->bindParam(':id', $_SESSION['id']);
        $requete->execute();
        if(password_verify($_POST['oldpassword'], $requete->fetchColumn())){
            $res=$database ->prepare("UPDATE user SET password = :password WHERE id = :id");
            $pass=password_hash($_POST['newpassword'], PASSWORD_DEFAULT);
            $res->bindParam(':password', $pass );
            $res->bindParam(':id', $_SESSION['id']);
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