<?php ?>

<html>
<head>
    <link rel="stylesheet" href="math.css">
    <script src="https://kit.fontawesome.com/26007f065f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

</head>
<body>
<?php require('menu1.php') ?>
<div id="titre"><h1>Analyse</h1></div>
<h2>Convergence de serie :</h2><br>
<br><p> Si le terme generale de la suite ne tend pas <br>
    vers 0 => la serie ne converge pas  <br>
<br>
 Exemple: la série </p>

<div class="math">
    \[
    \sum\limits_{k=1}^{+\infty} u_{k}
    \]
    \[
    u_k = e^x  \lim_{x \to +\infty} e^x = +\infty  \neq 0
    \]

</div>
</body>
</html>
