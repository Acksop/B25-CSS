/**
 *
 * @author      Erwan Lefèvre <erwan.lefevre@aposte.net>
 * @copyright   Erwan Lefèvre 2010
 * @license     Creative Commons - Paternité 2.0 France - http://creativecommons.org/licenses/by/2.0/fr/
 * @version     1.0
 * @see			http://webbricks.org/bricks/pageDim/
 *
 * @thanksTo	http://www.bonneville.be/post/Javascript-Hauteur-Navigateur-clientHeight-offsetHeight-scrollHeight-body-documentElement
 */


/** 
 * pageDim() 
 * -----------------------------------------------------------------------------
 * retourne les dimentions de la page
 *
 * @return		{Object}		{'w','h'}
 */


function pageDim() {
	var w, h;
	
	// firefox is ok
	h = document.documentElement.scrollHeight;
	w = document.documentElement.scrollWidth;
	
	// now IE 7 + Opera with "min window"
	if ( document.documentElement.clientHeight > h ) { h  = document.documentElement.clientHeight; }
	if ( document.documentElement.clientWidth > w ) { w  = document.documentElement.clientWidth; }
	
	// last for safari
	if ( document.body.scrollHeight > h ) { h = document.body.scrollHeight; }
	if ( document.body.scrollWidth > w ) { w = document.body.scrollWidth; }

	return {'w':w, 'h':h} ;
}