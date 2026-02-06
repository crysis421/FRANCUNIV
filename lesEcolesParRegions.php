<?php session_start();
require('Database.php');
try {
    $ database = Database::connect();
    $requete = $database->prepare("SELECT id,nom,banniere,etat FROM universite WHERE region=:region");
    $requete->bindParam(':region', $_GET['departement']);
    $requete->execute();
    $requete = $requete->fetchAll();
    $formations = [];
    foreach ($requete as $row) {
        $formation = $database->prepare("SELECT nom FROM formation WHERE univ=:univ");
        $formation->bindParam(':univ', $row['id']);
        $formation->execute();
        $formations[$row['nom']] = $formation->fetchAll();
    }
    $database = null;
} catch (Exception $e) {
    echo $e->getMessage();
    $database = null;
}
if ($_SESSION['profile_image'] != null) {
    $avatar = 'uploads/avatars/' . $_SESSION['profile_image'];
} else {
    $avatar = 'profil-image.png';
}
?>
<head xmlns="http://www.w3.org/1999/html">
    <link rel="stylesheet" href="LOGA.css">
    <script src="https://kit.fontawesome.com/26007f065f.js" crossorigin="anonymous"></script>
    <title>Regions</title>
</head>
<body>

<img src="logo-loga.png" alt="LOGA"/>
<a href="profil.php"><img id="pp" src="<?= htmlspecialchars($avatar) ?>" alt="Photo de profil"></a>
<?php require('menu.php') ?>
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
<div class="radio-inputs" id="radio">
    <label class="radio">
        <input type="radio" name="radio" checked="" id="Tous">
        <span class="name">Tous</span>
    </label>
    <label class="radio">
        <input type="radio" name="radio" id="Public">
        <span class="name">Public</span>
    </label>

    <label class="radio">
        <input type="radio" name="radio" id="Privee">
        <span class="name">Privée</span>
    </label>
</div>
<div id="filtre" class="radio-inputs">
    <label class="radio">
        <input type="radio" name="radio2" checked="" id="Tous1">
        <span class="name">Tous</span><br>
    </label>
    <label class="radio">
        <input type="radio" name="radio2" id="Licence">
        <span class="name">Licence</span><br>
    </label>
    <label class="radio">
        <input type="radio" name="radio2" id="BTS">
        <span class="name">BTS</span><br>
    </label>
    <label class="radio">
        <input type="radio" name="radio2" id="BUT">
        <span class="name">BUT</span><br>
    </label>
    <label class="radio">
        <input type="radio" name="radio2" id="Master">
        <span class="name">Master</span><br>
    </label>

    <label class="radio">
        <input type="radio" name="radio2" id="CPGE">
        <span class="name">CPGE</span><br>
    </label>
    <label class="radio">
        <input type="radio" name="radio2" id="DE">
        <span class="name">D.E</span><br>
    </label>
    <label class="radio">
        <input type="radio" name="radio2" id="Autre">
        <span class="name">Autre</span><br>
    </label>
</div>
<?php
if (isset($_GET['departement'])) {
    echo "<br><br><br><h1> Region : " . $_GET['departement'] . '</h1>';

}

?>

<div id="liste">
    <ul id="liste">
        <?php
        foreach ($requete as $row) {
            ?>

            <form id="univ" action="universite.php" method="get" class="<?php if ($row['etat'] == 1) {
                echo htmlspecialchars("public tout");
            } else {
                echo htmlspecialchars("privee tout");
            } ?>">
                <a onclick="this.closest('form').submit();" class="nomecole"
                   onmouseover="this.style.backgroundImage = 'url(<?= htmlspecialchars($row['banniere']) ?>)'"
                   onmouseout="this.style.backgroundImage = ''">
                    <input type="hidden" name="universite" value="<?= htmlspecialchars($row['nom']) ?>"/>
                    <p><?= htmlspecialchars($row['nom']) ?></p><br><br><br><br>
                </a>
            </form>
        <?php } ?>
    </ul>
</div>
<?php require('basdepage.php') ?>
<script src="lesEcolesParRegions.js"></script>
<script defer>
    const donneesJS = <?php echo json_encode($formations); ?>;

    function mergeSets(...sets) {
        return new Set(sets.flatMap(s => [...s]));
    }

    function getListe() {
        let liste = {
            'BUT': new Set(),
            'BTS': new Set(),
            'Licence': new Set(),
            'CPGE': new Set(),
            'Master': new Set(),
            'D.E': new Set(),
            'autre': new Set()
        }
        for (let univ in donneesJS) {
            for (let formation in donneesJS[univ]) {
                let trouve = false;
                for (let key in liste) {
                    if (donneesJS[univ][formation]['nom'].includes(key)) {
                        liste[key].add(univ);
                        trouve = true;
                    }
                }
                if (!trouve) {
                    liste["autre"].add(univ);
                }
            }
        }
        return liste;
    }

    function mettreEvent(liste, nom) {
        document.querySelector("#" + nom).addEventListener("click", e => {
            supprimer();
            resetResearch();

            // quel état est sélectionné ? (Tous / Public / Privee)
            const inputEtat = document.querySelector('input[name="radio"]:checked');
            const etatId = inputEtat ? inputEtat.id : 'Tous';

            etat_tt.forEach(autreUniv => {
                const nomUniv = autreUniv.querySelector('p').innerHTML;

                // Filtre par type (Licence / BTS / etc.)
                if (!liste.has(nomUniv)) return;

                // Filtre par état
                if (etatId === 'Public' && !autreUniv.classList.contains('public')) return;
                if (etatId === 'Privee' && !autreUniv.classList.contains('privee')) return;
                // si Tous => on ne filtre pas plus

                document.querySelector("#liste").appendChild(autreUniv);
            });
        });
    }


    let all = getListe();
    mettreEvent(all['Licence'],'Licence')
    mettreEvent(all['BUT'],'BUT')
    mettreEvent(all['BTS'],'BTS')
    mettreEvent(all['Master'],'Master')
    mettreEvent(all['CPGE'],'CPGE')
    mettreEvent(all['D.E'],'DE')
    mettreEvent(all['autre'],'Autre')
    mettreEvent(mergeSets(all['Licence'],all['BUT'],all['BTS'],all['Master'],all['D.E'],all['CPGE'],all['autre']),'Tous1')
</script>
</body>