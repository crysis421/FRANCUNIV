let etat_pu = document.querySelectorAll('.public');
let etat_pr = document.querySelectorAll('.privee');
let etat_tt = document.querySelectorAll('.tout');

function resetResearch() {
    document.querySelector('#query').value = '';
}

function supprimer() {
    for (let i of etat_pu) {
        try {
            document.querySelector("#liste").removeChild(i)
        } catch {

        }
    }
    for (let i of etat_pr) {
        try {
            document.querySelector("#liste").removeChild(i)
        } catch {

        }
    }
}

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
function changerlaliste(eta) {
    supprimer();
    resetResearch();

    // quel type est sélectionné ? (Tous / Licence / BTS / ...)
    const inputType = document.querySelector('input[name="radio2"]:checked');
    const typeId = inputType ? inputType.id : 'Tous1';

    let listeType = null;
    switch (typeId) {
        case 'Licence': listeType = all['Licence']; break;
        case 'BUT':     listeType = all['BUT'];     break;
        case 'BTS':     listeType = all['BTS'];     break;
        case 'Master':  listeType = all['Master'];  break;
        case 'CPGE':    listeType = all['CPGE'];    break;
        case 'DE':      listeType = all['D.E'];     break;
        case 'Autre':   listeType = all['autre'];   break;
        case 'Tous1':
        default:
            listeType = null; // pas de filtre de type
    }

    for (let univ of eta) {
        const nomUniv = univ.querySelector('p').innerHTML;

        // si un type est sélectionné, on garde seulement les univ de ce type
        if (listeType && !listeType.has(nomUniv)) continue;

        document.querySelector("#liste").appendChild(univ);
    }
}

}
document.querySelector('#Tous').addEventListener("click",even =>
    changerlaliste(etat_tt)
)
document.querySelector('#Tous').addEventListener("click",even =>
    changerlaliste(etat_tt)
)
document.querySelector('#Public').addEventListener("click",event =>
    changerlaliste(etat_pu)
)
document.querySelector('#Privee').addEventListener("click",event =>
    changerlaliste(etat_pr)
)

document.querySelector("#query").addEventListener("input", (event) => {
    supprimer()
    for (let etatPrKey of etat_pr) {
        if (etatPrKey.innerHTML.toLowerCase().includes(document.getElementById("query").value.toLowerCase())) {
            document.querySelector("#liste").appendChild(etatPrKey)
        }
    }
    for (let etatPrKey of etat_pu) {
        if (etatPrKey.innerHTML.toLowerCase().includes(document.getElementById("query").value.toLowerCase())) {
            document.querySelector("#liste").appendChild(etatPrKey)
        }
    }
})
const container=document.getElementById('liste');

const xhr = new XMLHttpRequest();

xhr.onreadystatechange= function (){
    if(this.readyState === 4 && this.status === 200 ){
        const data= JSON.parse(this.responseText);

        for (const item of data){
            const listItem= document.createElement('li');
            listItem.textContent= item.title;
            container.appendChild(listItem);
        }
    }
};

xhr.open('GET','hhtps etc');
xhr.send();