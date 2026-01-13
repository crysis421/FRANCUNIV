<head>
    <link rel="stylesheet" href="LOGA.css">
    <script src="https://kit.fontawesome.com/26007f065f.js" crossorigin="anonymous"></script>
    <title>Regions</title>
</head>
<body>

<img src="logo-loga.png" alt="LOGA"/>
<a href="profil.php"><img id="pp" src="<?= htmlspecialchars($avatar) ?>" alt="Photo de profil"></a>
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
<div class="group">
    <svg viewBox="0 0 24 24" aria-hidden="true" class="search-icon">
        <g>
            <path
                d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"
            ></path>
        </g>
    </svg>

    <input
        id="query"
        class="input"
        type="search"
        placeholder="Search..."
        name="searchbar"
    />
</div>
<script src="LOGA.js"></script>

<?php
if(isset($_GET['departement'])){
    echo "<br><br><br><h1> Region : ".$_GET['departement'].'</h1>';
}

?>
<!-- bretagne:

- Université de Brest
- Université de Bretagne-Sud (UBS) - Lorient
- Université de Rennes
- Université de Rennes 2

Haut de france :

- Université d'Artois - Arras
- Université de Picardie Jules Verne (UPJV) - Amiens
- Université du Littoral Côte d'Opale (ULCO) - Dunkerque
- Université Polytechnique Hauts-de-France - Valenciennes

Normandie:

- Université du Havre
- Université de Caen Normandie
- Université de Lille
- Université de Rouen

Ile de france :

- Université de Cergy-Pontoise
- Université Paris Cité
- Université Gustave Eiffel
- Université Paris Dauphine - PSL
- Université Paris-Est Créteil Val-de-Marne (UPEC)
- Université Paris Nanterre
- Université Paris-Panthéon-Assas
- Université Paris 1 - Panthéon-Sorbonne
- Université Paris 3 - Sorbonne nouvelle
- Université Paris 4 et Paris 6 - Sorbonne Université
- Université Évry Paris-Saclay
- Université Paris-Saclay - IUT d'Orsay
- Université Paris-Saclay - Université de Versailles - Saint-Quentin-en-Yvelines
- Université Paris Sciences et Lettres
- Université Paris 8 - Vincennes-Saint-Denis
- Université Sorbonne Paris Nord

Grand est :

- Université de Haute-Alsace (UHA) - Mulhouse
- Université de Lorraine - Nancy
- Université de Reims - Champagne-Ardenne (URCA)
- Université de Strasbourg

Bourgogne-Franche-Compte:

- Université Bourgogne Europe
- Université de Franche-Comté (UFC) - Besançon

Centre-Val De Loire:

- Université d'Orléans
- Université de Tours

Pays de la Loire:

- Communauté d'universités et établissements (COMUE) Angers - Le Mans
- Nantes Université

Nouvelle-Aquitaine:

- La Rochelle Université
- Université Bordeaux-Montaigne
- Université de Bordeaux
- Université de Limoges
- Université de Pau et Pays de l'Adour (UPPA)
- Université de Poitiers

Auvergne-Rhone-Alpes:

- Université Clermont Auvergne (UCA)
- Université ComUE Lyon
- Université Grenoble Alpes (UGA)
- Université Savoie Mont Blanc - Chambéry
- Université Jean Monnet

Occitanie:

- Université de Nîmes (UNIM)
- Université de Montpellier
- Université de Montpellier Paul Valéry
- Université de Perpignan Via Domitia
- Université de technologie -Tarbes - Occitanie Pyrénées (UTTOP)
- Université de Toulouse

Provence-Alpes-Côte d'Azur:

- Avignon université (AU)
- Aix-Marseille université (AMU)
- Université Côte d'Azur
- Université de Toulon

Corse:

- Université de Corse Pasquale Paoli - Corte

Mayotte:*
Reunion:*

- Université de La Réunion

Guyane:*

- Université de Guyane

Nouvelle Calédonie:

- Université de la Nouvelle-Calédonie

Guadeloupe:
*
- Université des Antilles - Pôle Guadeloupe

Martinique:*

- Université des Antilles - Pôle Martinique

Polynesie Francaise:

- Université de la Polynésie Française (UPF)

-->

</body>