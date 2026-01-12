<?php
session_start();
if ($_SESSION['profile_image'] != null) {
    $avatar = 'uploads/avatars/' . $_SESSION['profile_image'];
} else {
    $avatar = 'profil-image.png';
}
?><!DOCTYPE html>
<head>
  <link rel="stylesheet" href="LOGA.css">
  <script src="https://kit.fontawesome.com/26007f065f.js" crossorigin="anonymous"></script>
  <title>Rennes 1 </title>

</head>
<body>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5244.009432721929!2d-1.6408655236270406!3d48.117491671241304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480edee5d13d72cd%3A0x570f619868b57bc!2sUniversit%C3%A9%20de%20Rennes%20-%20Campus%20Beaulieu!5e1!3m2!1sfr!2sfr!4v1766760483410!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<img src="logo-loga.png" alt="LOGA"/>
<a href="profil.php"><img id="pp" src="<?= htmlspecialchars($avatar) ?>" alt="Photo de profil"></a>
<img id="logo" src="renens1%20photo.png" alt="LOGO"/>
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
  <a id ="noteggmaps" href="https://maps.app.goo.gl/JdACBa5uks6GaUqB7" target="_blank">
  Note Google Maps : 4.2 <i class="fa-solid fa-star"></i>
  </a>
<div id="avis">
  <div id="avistitre">Avis</div>
  <div class="messageBox">
    <div class="fileUploadWrapper">
      <label for="file">
        <i class="fa-solid fa-image"></i>
        </svg>
        <span class="tooltip">Add an image</span>
      </label>
      <input type="file" id="file" name="file" />
    </div>
    <input required="" placeholder="Rediger un avis ..." type="text" id="messageInput" />
    <button id="sendButton">
      <i class="fa-solid fa-arrow-right"></i>
    </button>
  </div>

</div>
</body>
