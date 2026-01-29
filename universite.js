let formation = document.querySelectorAll('#a')

function supprimer() {
    for (let i of formation) {
        try {
            document.querySelector("#liste").removeChild(i)
        } catch {
        }
    }
}

document.querySelector('#Licence').addEventListener("click", (event) => {
    supprimer()
    for (let etatPrKey of formation) {
        if (etatPrKey.contains('Licence')) {
            document.querySelector("#souslisteformation").appendChild(etatPrKey)
        }
    }
})
document.querySelector('#BTS/BUT').addEventListener("click", (event) => {
    supprimer()
    for (let etatPrKey of formation) {
        if (etatPrKey.contains('BTS') || etatPrKey.contains('BUT') ) {
            document.querySelector("#souslisteformation").appendChild(etatPrKey)
        }
    }
})
document.querySelector('#CPGE').addEventListener("click", (event) => {
    supprimer()
    for (let etatPrKey of formation) {
        if (etatPrKey.contains('CPGE') ) {
            document.querySelector("#souslisteformation").appendChild(etatPrKey)
        }
    }
})
document.querySelector('#Autres').addEventListener("click", (event) => {
    supprimer()
    for (let etatPrKey of formation) {
        if (!etatPrKey.contains('CPGE') && !etatPrKey.contains('BTS') && !etatPrKey.contains('Licence') && !etatPrKey.contains('BUT') ) {
            document.querySelector("#souslisteformation").appendChild(etatPrKey)
        }
    }
})