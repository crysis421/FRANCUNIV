function changerTexte() {
    const radios = document.getElementsByName("etat");
    const resultat = document.getElementById("resultat");

    for (let radio of radios) {
        if (radio.checked) {
            if (radio.value === "Public") {
                resultat.textContent = "Tu as choisi l’option 1";
            } else if (radio.value === "Privee") {
                resultat.textContent = "Tu as choisi l’option 2";
            }
        }
    }
}
