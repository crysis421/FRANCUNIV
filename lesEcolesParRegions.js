let etat_pu = document.querySelectorAll('.public')
let etat_pr = document.querySelectorAll('.privee')
console.log(etat_pu,etat_pr)
function supprimer() {
    for (let i in etat_pu) {
        try {
            document.querySelector("#liste").remove(i)
        }catch {

        }
    }
    for (let i in etat_pr) {
        try {
            document.querySelector("#liste").remove(i)
        }catch{

        }
    }
}

document.querySelector('#Tous').addEventListener("click", (event) => {
    supprimer()
    for (let etatPrKey in etat_pr) {
        document.querySelector("#liste").add(etatPrKey)
    }
    for (let etatPukey in etat_pu) {
        document.querySelector("#liste").add(etatPukey)
    }
})
document.querySelector('#Public').addEventListener("click", (event) => {
    supprimer()
    for (let etatPukey in etat_pu) {
        document.querySelector("#liste").add(etatPukey)
    }
})
document.querySelector('#Privee').addEventListener("click", (event) => {
    supprimer()
    for (let etatPrkey in etat_pr) {
        document.querySelector("#liste").add(etatPrkey)
    }
})