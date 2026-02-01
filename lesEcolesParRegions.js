let etat_pu = document.querySelectorAll('.public')
let etat_pr = document.querySelectorAll('.privee')
etat_tt = etat_pu.concat(etat_pr)

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

function afficher(l, index) {
    supprimer()
    for (let i = index * 12; i < (index + 1) * 12; i++) {
        document.querySelector('#liste').appendChild(l[i])
    }
}

function event(etat,index) {
    supprimer()
    resetResearch()
    let liste
    for (let etatPrKey of etat) {
        liste.push(etatPrKey)
    }
    afficher(liste,index)
}

document.querySelector('#Tous').addEventListener("click", (event) => {
    event(etat_tt)
})
document.querySelector('#Public').addEventListener("click", (event) => {
    event(etat_pu)
})
document.querySelector('#Privee').addEventListener("click", (event) => {
    event(etat_pr)
})

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
