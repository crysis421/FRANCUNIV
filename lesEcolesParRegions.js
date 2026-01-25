let etat_pu = document.querySelectorAll('.public')
let etat_pr = document.querySelectorAll('.privee')
console.log(etat_pu, etat_pr)

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
    for (let etatPrKey of etat_pr) {
        document.querySelector("#liste").appendChild(etatPrKey)
    }
    for (let etatPukey of etat_pu) {
        document.querySelector("#liste").appendChild(etatPukey)
    }
})
document.querySelector('#Public').addEventListener("click", (event) => {
    supprimer()
    for (let etatPukey of etat_pu) {
        document.querySelector("#liste").appendChild(etatPukey)
    }
})
document.querySelector('#Privee').addEventListener("click", (event) => {
    supprimer()
    for (let etatPrkey of etat_pr) {
        document.querySelector("#liste").appendChild(etatPrkey)
    }
})

document.querySelector("#filtre").addEventListener("click", event => {
    if (document.getElementById("filtrecheckbox").style.display == 'block') {
        document.getElementById("filtrecheckbox").style.display = 'none';
    } else {
        document.getElementById("filtrecheckbox").style.display = 'block';
    }

})

document.querySelector("#query").addEventListener("change", (event) => {
    document.body.innerHTML = `SALUT`+document.querySelector("#query").value
})