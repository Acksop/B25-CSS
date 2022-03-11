function calculPourcentage() {



    var body = document.body,
        html = document.documentElement;

    var height = Math.max( body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight );

    var WindowHeight = Math.max( html.clientHeight, html.scrollHeight, html.offsetHeight );



    /*console.log(body.scrollHeight);
    console.log(body.scrollHeight);

    var supportPageOffset = window.pageXOffset !== undefined;
    var isCSS1Compat = ((document.compatMode || "") === "CSS1Compat");

    var x = supportPageOffset ? window.pageXOffset : isCSS1Compat ? window.scrollX : document.body.scrollLeft;
    var y = supportPageOffset ? window.pageYOffset : isCSS1Compat ? window.scrollY : document.body.scrollTop;

    console.log(y);
    console.log(html.scrollTop);
    console.log(body.scrollTop);

    console.log(html.clientHeight);
    console.log(html.scrollHeight);
    console.log(html.offsetHeight);*/

    let hauteurDocument = height; // Hauteur du document complet
    //console.log(hauteurDocument);
    let hauteurFenetre = WindowHeight; // Hauteur de la fenêtre courante (viewport)
    //console.log(hauteurFenetre);
    let position = body.scrollTop; // Position haute au moment du scroll
    //console.log(position);


    let positionDernierEcran = hauteurDocument - hauteurFenetre; // Position haute du dernier écran visible
    let ratioHauteur = position / positionDernierEcran; // Ratio de la hauteur
    let pourcentageHauteur = Math.floor(ratioHauteur * 100); // Pourcentage de la hauteur

    // Affichage de l'évolution du pourcentage de la hauteur dans la console (optionnel)
    //console.log("Pourcentage de la hauteur parcourue : " + pourcentageHauteur + "%");

    return pourcentageHauteur;
}

// Barre de défilement horizontale en fonction du scroll
function barreDefilement() {
    let cible = document.getElementsByClassName( "progression")[0];

    console.log(calculPourcentage());
    cible.style.width = calculPourcentage()+"%";
}
// Chargement des fonctions lors du chargement et du scroll
let body = document.getElementById('body');
body.addEventListener("scroll", function(){
    barreDefilement();
});
