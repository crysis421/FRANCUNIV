let formation = document.querySelectorAll('.a')

function supprimer() {
    for (let i of formation) {
        try {
            document.querySelector("#souslisteformation").removeChild(i)
        } catch {
        }
    }
}

document.querySelector('#Licence').addEventListener("click", (event) => {
    supprimer()
    for (let etatPrKey of formation) {
        if (etatPrKey.includes('Licence')) {
            document.querySelector("#souslisteformation").appendChild(etatPrKey)
        }
    }
})
document.querySelector('#BTS/BUT').addEventListener("click", (event) => {
    supprimer()
    for (let etatPrKey of formation) {
        if (etatPrKey.includes('BTS') || etatPrKey.includes('BUT') ) {
            document.querySelector("#souslisteformation").appendChild(etatPrKey)
        }
    }
})
document.querySelector('#CPGE').addEventListener("click", (event) => {
    supprimer()
    for (let etatPrKey of formation) {
        if (etatPrKey.includes('CPGE') ) {
            document.querySelector("#souslisteformation").appendChild(etatPrKey)
        }
    }
})
document.querySelector('#Autres').addEventListener("click", (event) => {
    supprimer()
    for (let etatPrKey of formation) {
        if (!etatPrKey.includes('CPGE') && !etatPrKey.includes('BTS') && !etatPrKey.includes('Licence') && !etatPrKey.includes('BUT') ) {
            document.querySelector("#souslisteformation").appendChild(etatPrKey)
        }
    }
})