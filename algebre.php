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
~~ avec ~C_{ik} = (-1)^{i+k}det(A_{ik})
\]
<p>Exemple: </p>
\[
\begin{gathered}
\text{La matrice }
A &=
\begin{pmatrix}
1 & 2 & 3 \\
4 & 5 & 6 \\
7 & 8 & 9
\end{pmatrix}
~ ~
\det(A)
=
1
\begin{vmatrix}
5 & 6 \\
8 & 9
\end{vmatrix}
- 2
\begin{vmatrix}
4 & 6 \\
7 & 9
\end{vmatrix}
+ 3
\begin{vmatrix}
4 & 5 \\
7 & 8
\end{vmatrix}~
\det(A)=1*(5*9-8*6)-2*(4*9-7*6)+3*(4*8-7*5)=-3 +12-9=0\\
\text{A est donc pas inversible }
\end{gathered}
\]
<p> Soit A un matrice carre de  taille n x n .Les permutations deux 2 colonnes inveerse le signe du determinant :</p>
\[\begin{gathered}
C_i \leftrightarrow C_j \\
det(A)~ =~-det(A)
\end{gathered}
\]

<p>Multiplication d une colonne par un scalaire: </p>
\[\begin{gathered}
C_i \leftrightarrow \alpha C_i \\
det(A)~ = \alpha det(A)
\end{gathered}\]
<p> Addition d un multiple d une colonne a une autre colonne :</p>
\[ \begin{gathered}
C_j \leftrightarrow C_j + \alpha C_i \\
 \text{det(A) reste inchangé }
\end{gathered}
\]
<p>Attention si on fait :</p>
\[\begin{gathered}
C_j \leftrightarrow \beta C_j + \alpha C_i \newline
det(A)= ~\beta det(A)
\end{gathered}\]
<p>Tout ce qu il y a au dessus marche aussi avec les lignes </p>
<p>Si on multiplie tout une matrice par un scalaire on a :</p>
\[ det(\alpha A)~= ~ \alpha^n det(A)\]
<p> Pour une matrice diagonale ou triangulaire superieur ou inferieur on a : le determinant de A et la multiplication des elements de la diagonale <br>
Exemple: </p>
\[ A~\begin{pmatrix}
1 & 2 & 3 \\
0 & 5 & 6 \\
0 & 0 & 9
\end{pmatrix} \\
~det(A)~=1*5*9=45 \]
<br>
\[\begin{gathered}
det(A^{T})~=~det(A) \\
det(I_n)~=~1  \\
\text{ si A est inversible alors : } det(A^{-1})~=~\frac{1}{det(A)}
\end{gathered}
\]
<p> Soit 2 matrices carrées A et B : </p>
\[ det(AB)~=~det(A)det(B)\]
<p> La matrice de Vandermonde : </p>
\[
V =
\begin{pmatrix}
1 & 1 & \cdots & 1 \\
x_1 & x_2 & \cdots & x_n \\
x_1^{2} & x_2^{2} & \cdots & x_n^{2} \\
\vdots & \vdots & \ddots & \vdots \\
x_1^{\,n-1} & x_2^{\,n-1} & \cdots & x_n^{\,n-1}
\end{pmatrix}
\]
<p> Et son determinant :</p>
\[
\det(V)
=
\prod_{1 \le i < j \le n}
(x_j - x_i)
\]
<p>Matrice d un endomorphisme : </p>
\[\begin{gathered}
f(x,y,z)=(x+2y,y-z,3x+z) \\
\text{sa matrice dans la base canonique e=(e_1,e_2,e_3)} \\
f(e_1)=f(1,0,0)=(1,0,3) ~~ f(e_2)=f(0,1,0)=(2,1,0)~~ f(e_3)=f(0,0,1)=(0,-1,1)\\
\text{on a la matrice de f dans la base canonique :}
Mat_e(f)=\begin{pmatrix}
1 & 2 & 0 \\
0 & 1 & -1 \\
3 & 0 & 1
\end{pmatrix}
\end{gathered}
\]
<p> Soit f et g 2 endomorphisme : </p>
\[\begin{gathered}
det(f\circ g )=det(f)det(g)
\end{gathered}
\]
<p>Remarque : </p>
\[\begin{gathered}
\text{  Soit f: } \mathbf{R}^n \rightarrow \mathbf{R}^n \text{ un endomorphisme linéaire . Les assertions suivante sont equivalentes :
1) f est bijectif \\
2) f est injectif \\
3) f est surjectif \\
4) {f(e_1),...,f(e_n)} est une base de } \mathbf{R}^n
\text{ 5)} \def(f) \ne  0 \text{ c est a dire }\det(f(e_1),...,f(e_n)) \ne 0

\end{gathered}
\]
<p>Aussi aller voir regle de Cramer mais c'est long pour rien</p>
</body>
</html>
