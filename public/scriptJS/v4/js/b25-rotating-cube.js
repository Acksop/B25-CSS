/*Original Source from : https://codepen.io/desandro/pen/KRWjzm*/

var cube = document.querySelector('.b25-cube');
var currentClass = '';
var left_btn = document.querySelector('.left__btn');
var front_btn = document.querySelector('.front__btn');
var right_btn = document.querySelector('.right__btn');
function changeSide_btn(side){
    var showClass = 'show-' + side;
    console.log(side);
    if ( currentClass ) {
        cube.classList.remove( currentClass );
    }
    cube.classList.add( showClass );
    currentClass = showClass;
}
left_btn.addEventListener( 'mouseover', () => {changeSide_btn('left')} );
front_btn.addEventListener( 'mouseover', () => {changeSide_btn('front')} );
right_btn.addEventListener( 'mouseover', () => {changeSide_btn('right')} );

left_btn.addEventListener( 'click', () => {window.location.href = "http://besancon25.com";} );
right_btn.addEventListener( 'click', () => {window.location.href = "http://besancon25.net";} );

cube.addEventListener( 'mouseout', () => {changeSide_btn('front')} );