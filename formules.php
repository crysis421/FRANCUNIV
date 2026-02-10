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
<div id="titre"><h1>Formules</h1></div>
<div id="dl">
    <h2>Devellopement Limite en 0</h2><br>
    <br>
    <div class="math">
        \[
            e^x = 1 + x + \frac{x^2}{2!} + \frac{x^3}{3!} + x\epsilon(x)
        \]
        \[
        \sin x =  x  - \frac{x^3}{3!} + \frac{x^5}{5!} -\frac{x^7}{7!} + x\epsilon(x)
        \]
        \[
        \cos x =  1  - \frac{x^2}{2!} + \frac{x^4}{4!} -\frac{x^6}{6!} + x\epsilon(x)
        \]
        \[
        \frac{1}{1+x} =  1  - x + x^2 - x^3 + x\epsilon(x)
        \]
        \[
        \frac{1}{1-x} =  1  + x + x^2 + x^3 + x\epsilon(x)
        \]
        \[
        \ln(\frac{1}{1+x}) =  x  - \frac{x^2}{2} + \frac{x^3}{3!} -\frac{x^4}{4!} + x\epsilon(x)
        \]
        \[
        \ln(\frac{1}{1-x}) = - x  - \frac{x^2}{2} - \frac{x^3}{3!} -\frac{x^4}{4!} + x\epsilon(x)
        \]

    </div>
    <p> </p>

</div>
</body>
</html>
