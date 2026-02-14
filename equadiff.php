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
<div id="titre"><h1>Equa &nbsp diff</h1></div>
<div id="resol1">
    <h2>Resolution d'une equation diff ordinaire homogene :</h2><br>
    <br>
    <p> Il faut mettre sous forme résolu </p>
    <div class="math">
        \[
        y'(x) + \alpha (x) y(x) = 0
        \]
    </div>
    <p>Apres ecrire sous la forme suivante :</p><br>
    <div class="math">
        \[
        \frac{y'(x)}{y(x)} = -\alpha (x)
        \]
    </div>
    <p> Donc on a la solution de la forme </p>
    <div class="math">
        \[
        y(x)=e^{\int -\alpha (x) }
        \]
    </div>
    <h2>Resolution d un systeme differentiel homogene :</h2>
    <p> On va trouver la matrice associe au systeme a 2 dimensions et puis on cherche les valeurs propres \( ~\lambda _1
        ~ \lambda _2 ~\) ,puis leurs vecteurs propres associées. Les solutions sont de la forme :</p>
    \[ Y(t) = \alpha e^{\lambda _1 t}v_1+\beta e^{\lambda _2 t }v_2\]
    <p> Exemple : </p>
    \( \left\{ \begin{array}
    y'(t)= ~x(t) \\
    x'(t)= ~y(t)
    \end{array}
    \right. \)
</div>
</body>
</html>
