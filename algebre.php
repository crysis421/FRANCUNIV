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
<div id="titre"><h1>Algebre</h1></div>
<h2> Groupes et sous groupes :</h2>
<h3>Definition: </h3>
<p>On dit que "e" l element neure de G si :</p>
\[ \forall x \in G , x * e = e * x = x \]
<p>On dit l inverse\symetrique de x est :</p>
\[ \forall x \in G , \exists y , x * y = y * x = e  ~ y  ~ note ~ x^{-1} \]
<p> On dit que un est commutatif ou abelien si :</p>
\[\forall (x,y) \in G² , x*y=y*x\]
    <h3>Montrez que c est un groupe/sous groupes :</h3>
        <p> Dans la pratique on montre que H est un sous groupe de G avec x.y . la loi de G<br>
            d un groupe connu (exmple un sous groupe de (R,+)). Pour ca on montre que :<br></p>
<p>1) H contient l'élément neutre de G</p>
           <p> 2) si   &nbsp\( x,y\in H \)&nbsp , alors  &nbsp\( xy \in H\)&nbsp  et  &nbsp\( x^{-1} \in H \)  </p>


</body>
</html>
