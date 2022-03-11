function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;

    // While there remain elements to shuffle...
    while (0 !== currentIndex) {

        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }

    return array;
}

var hero      = $('#en-tete');

var backgrounds = [
    { src: '/images/animation-slider-vegas/brouillard-1-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/brouillard-2-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/brouillard-3-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/img_calm_00-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/img_calm_01-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/img_calm_02-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/img_calm_03-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/img_calm_04-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/img_calm_05-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/img_calm_06-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/img_calm_07-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/img_calm_08-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/img_calm_09-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/img_calm_10-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/nuages-00-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/nuages-01-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/photo-707-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/photo-708-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/printemps-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/printemps-2-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/printemps-3-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/printemps-4-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/printemps-5-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/vid01sec-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/vid02sec-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/vid03sec-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/vid04sec-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/vid05sec-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/vid06sec-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/vid07sec-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/vid08sec-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/vid-lesfeuilles1-min.gif', valign: 'top' },
    { src: '/images/animation-slider-vegas/vid-lesfeuilles2-min.gif', valign: 'top' },
];

shuffle(backgrounds);


hero.vegas({
    preload: true,
    overlay: '/scriptJS/vegas/overlays/01.png',
    transitionDuration: 4000,
    delay: 250000,
    slides: backgrounds
});