let etat_pu = document.querySelectorAll('.public');
let etat_pr = document.querySelectorAll('.privee');
let etat_tt=[]


for(let etat of etat_pr){
    etat_tt.psuh(etat);
}
for(let etat of etat_pu){
    etat_tt.psuh(etat);
}
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


function changerlaliste(eta) {
    supprimer()
    resetResearch()
    for (let etatPrKey of eta) {
        document.querySelector("#liste").appendChild(etatPrKey)
    }
}

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
