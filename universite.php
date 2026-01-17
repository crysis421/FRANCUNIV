<?php session_start();

if ($_SESSION['profile_image'] != null) {
    $avatar = 'uploads/avatars/' . $_SESSION['profile_image'];
} else {
    $avatar = 'profil-image.png';
}

?>
<html>
<head>
    <link rel="stylesheet" href="LOGA.css">
    <script src="https://kit.fontawesome.com/26007f065f.js" crossorigin="anonymous"></script>
    <title>"<?= $_GET['universite']?>"</title>
</head>

</html>
