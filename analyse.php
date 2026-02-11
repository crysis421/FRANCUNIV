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
<div id="convergence">
    <h3>Condition</h3>
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
    <h3>Regle de Rieman</h3>
    <br><p>(En   \$+\infty -\infty\$ ) Si il existe un \( \alpha > 1 \) tels que : <br>
    <div class="math">
        \[
        \lim_{x \to +\infty} x^{\alpha } f(x) = l
        = > \int_{a}^+\infty f(x)dx
        \]

    </div>
    <br><p>(En 0) Si il existe un $ \alpha < 1 $ tels que : <br>
    <div class="math">
        \[
        \lim_{x \to +\infty} x^{\alpha } f(x) = l
        = >         \int_{0}^a f(x)dx
        \]


    </div>
    <h3>Convergence de series entieres : </h3>
    <br>
    <p>Dans la pratique on calcul : </p>
    <div class="math">
        \[
        \sum\limits_{k=1}^{+\infty} a_{k}z^{k}
        \]
        \[
        \lim_{k \to +\infty}  |\frac{a_{k+1}}{a_{k}}| = l => r= \frac{1}{l}
        \]
        \[
        \lim_{k \to +\infty}  |a_{k}|^{\frac{1}{k}}  = l => r= \frac{1}{l}
        \]
        <p> Avec r le rayon de convergence de la serie. C est pour quelle valeur de z la serie converge </p>

    </div>
</div>
</body>
</html>
