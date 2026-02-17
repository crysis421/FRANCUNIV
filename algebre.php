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
\[ \forall x \in G , \exists y , x * y = y * x = e ~ y ~ note ~ x^{-1} \]
<p> On dit que un est commutatif ou abelien si :</p>
\[\forall (x,y) \in G² , x*y=y*x\]
<h3>Montrez que c est un groupe/sous groupes :</h3>
<p> Dans la pratique on montre que H est un sous groupe de G avec x.y . la loi de G<br>
    d un groupe connu (exmple un sous groupe de (R,+)). Pour ca on montre que :<br></p>
<p>1) H contient l'élément neutre de G</p>
<p> 2) si &nbsp\( x,y\in H \)&nbsp , alors &nbsp\( xy \in H\)&nbsp et &nbsp\( x^{-1} \in H \) </p>
<h3> Groupes cycliques :</h3>
<p> C est des groupes qui sont cylcique qui se repetent (exemple: les modulos)</p>
\[ \frac{\mathbb{Z}}{n\mathbb{Z}} \]
<p> Soit G un groupe cyclique d ordre n.Pour tout diviseurs d de n, il existe un sous groupe de G d ordre d</p>

<h3> Morphisme de Groupe :</h3>
<p> Un morphisme de groupe de G dans A est une application qui verifie : </p>
\[\forall (x,y) \in G² , \Phi (xy)=\Phi (x) \Phi (y)\]
<p> Pour un morphisme qui va de A vers B et les elements neutre a et b des groupes A et B alors :</p>
\[\Phi(a)=b ~ et ~ x \in A ,\Phi (x^{-1})=(\Phi(x))^{-1} \]
\[ \Phi ~ est ~ un ~ morphisme ~ de ~ G ~ dans ~ A , ~ on ~dit ~ que ~ \Phi ~ est ~ un ~ isomorphisme ~ si ~ il ~ existe
~ \psi ~ de ~ A ~ dans~ G ~ tel ~ que ~ \Phi\circ\psi = ID_A ~~ \psi\circ\Phi = ID_G \]
<p> Un automorphisme est un isomorphisme de G dans G </p>

<h2>Determinant :</h2>
<p> Le determinant est une forme n-linéaire alternées et il s ecrit : det(A) avec A une matrice carrée</p>
<p> Le determinant ce calcul de la forme suivante : </p>
\[
\det(A)
=
\begin{vmatrix}
a_{11} & a_{12} & \cdots & a_{1n} \\
a_{21} & a_{22} & \cdots & a_{2n} \\
\vdots & \vdots & \ddots & \vdots \\
a_{n1} & a_{n2} & \cdots & a_{nn}
\end{vmatrix}
=
\sum_{j=1}^{n} a_{1j} C_{1j}
\]
<p>Exemple: </p>
\[ La & matrice & A = \begin{pmatrix}
1 & 2 & 3\\
4 & 5 & 6 \\
7 & 8 & 9
\end{pmatrix}
 On & va & avoir & le & calcul & suivant & det(A)= 1 \begin{vmatrix}
5 & 6 \\
8 & 9
\end{vmatrix} 2 \begin{vmatrix}
4 & 6 \\
7 & 9
\end{vmatrix} 3 \begin{vmatrix}
4 & 5 \\
7 & 8
\end{vmatrix} = 1*(5*9-8*6) + 2*(4*9-7*6) + 3*(4*5-7*8)= -3 -12 -108 = -123\]
</body>
</html>
