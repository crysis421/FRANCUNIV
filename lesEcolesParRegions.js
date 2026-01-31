let etat_pu = document.querySelectorAll('.public')
let etat_pr = document.querySelectorAll('.privee')
console.log(etat_pu, etat_pr)

function resetResearch(){
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

document.querySelector('#Tous').addEventListener("click", (event) => {
    supprimer()
    resetResearch()
    for (let etatPrKey of etat_pr) {
        document.querySelector("#liste").appendChild(etatPrKey)
    }
    for (let etatPukey of etat_pu) {
        document.querySelector("#liste").appendChild(etatPukey)
    }
})
document.querySelector('#Public').addEventListener("click", (event) => {
    supprimer()
    resetResearch()
    for (let etatPukey of etat_pu) {
        document.querySelector("#liste").appendChild(etatPukey)
    }
})
document.querySelector('#Privee').addEventListener("click", (event) => {
    supprimer()
    resetResearch()
    for (let etatPrkey of etat_pr) {
        document.querySelector("#liste").appendChild(etatPrkey)
    }
})

document.querySelector("#Tous1").addEventListener("click", event => {
    supprimer()
    resetResearch()
})

document.querySelector("#query").addEventListener("input", (event) => {
    supprimer()
    for (let etatPrKey of etat_pr) {
        if(etatPrKey.innerHTML.toLowerCase().includes(document.getElementById("query").value.toLowerCase())) {
            document.querySelector("#liste").appendChild(etatPrKey)
        }
    }
    for (let etatPrKey of etat_pu) {
        if(etatPrKey.innerHTML.toLowerCase().includes(document.getElementById("query").value.toLowerCase())) {
            document.querySelector("#liste").appendChild(etatPrKey)
        }
    }
})