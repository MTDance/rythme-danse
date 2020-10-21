// Création de la barre de progresssion sur js
window.onload = () => {
    // Ecouteur d'évenement sur scroll
    window.addEventListener("scroll", () => {
        //Calcul de la hauteur "utile" du document
        let hauteur = document.documentElement.scrollHeight - window.innerHeight

        //Récupération de la postion verticale
        let position = window.scrollY

        //Récupération de la largur de la fenetre
        let largeur = document.documentElement.clientWidth

        // Calcul de la largeur de la barre
        let barre = position / hauteur * largeur

        // Modification du CSS de la barre
        document.getElementById("progress").style.width = barre+"px"
    })
} // Fin window.onload

