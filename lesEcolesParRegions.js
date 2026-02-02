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