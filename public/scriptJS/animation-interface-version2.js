
/*
 * Fonction permettant de rentrer le menu dans sa tanière 
 */

function empilerMenu(){
	cacherDIV('btn_empilerMenu');
	afficherDIV('btn_depilerMenu');
	
	interface = getCookie('interfaceIHM');
	if(interface < 10){
		interface = 10;	
	}
	
	let CSS_menuEmpiler;
	CSS_menuEmpiler = document.createElement("link");
	CSS_menuEmpiler.id = "interfaceMenu";
	CSS_menuEmpiler.type = "text/css";
	CSS_menuEmpiler.rel = "stylesheet";
	CSS_menuEmpiler.href = "/stylesCSS/v2/interface"+interface+"_menuEmpiler.css";
	CSS_menuEmpiler = document.head.appendChild( CSS_menuEmpiler );
	
	let dtExpire = new Date();
    dtExpire.setTime(dtExpire.getTime() + 3600*1000);
   
    leCookie = getCookie('CookieApp_CO_LeCookie');
   
    if(leCookie != null && leCookie == 1){
	   setCookie('statusMenu', '1', dtExpire, '/',undefined, true, 'None' );
    }

    B25_justCharged = getCookie('B25_landingPage');
   
    if(B25_justCharged == 0){
		  if (window.removeEventListener) {
		      window.removeEventListener("scroll", empilerAutomatiquementMenu, false);
		  } else if (window.detachEvent) {
			  window.detachEvent("scroll", empilerAutomatiquementMenu);
	   	  } else {
	   		  window.onscroll = '';
		  }
    }
  
	if(leCookie != null && leCookie == 1){
		setCookie('B25_landingPage', '1', dtExpire, '/',undefined, true, 'None' );
	}
   
}
/*
 * Fonction permettant de rentrer le menu dans sa tanière de façon
 * Automatique en HTML5
 */

function empilerAutomatiquementMenu(){
	cacherDIV('btn_empilerMenu');
	afficherDIV('btn_depilerMenu');
	
	interface = getCookie('interfaceIHM');
	if(interface == null){
		interface = 10;	
	}
	
	let CSS_menuEmpiler;
	CSS_menuEmpiler = document.createElement("link");
	CSS_menuEmpiler.id = "interfaceMenu";
	CSS_menuEmpiler.type = "text/css";
	CSS_menuEmpiler.rel = "stylesheet";
	CSS_menuEmpiler.href = "/stylesCSS/v2/interface"+interface+"_menuEmpiler.css";
	CSS_menuEmpiler = document.head.appendChild( CSS_menuEmpiler );
	
	let dtExpire = new Date();
    dtExpire.setTime(dtExpire.getTime() + 3600*1000);
    leCookie = getCookie('CookieApp_CO_LeCookie');
    
    if(leCookie != null && leCookie == 1){
    	setCookie('statusMenu', '1', dtExpire, '/',undefined, true, 'None'  );
    }
   
   if (window.removeEventListener) {
       window.removeEventListener("scroll", empilerAutomatiquementMenu, false);
   } else if (window.detachEvent) {
       window.detachEvent("scroll", empilerAutomatiquementMenu);
   } else {
       window.onscroll = '';
   }
   
   if(leCookie != null && leCookie == 1){
	   setCookie('B25_landingPage', '1', dtExpire, '/',undefined, true, 'None' );
   }
   
}

/*
 * Fonction permettant de remontrer la tanière du menu 
 */

function depilerMenu(){
	afficherDIV('btn_empilerMenu');
	cacherDIV('btn_depilerMenu');
	
	CSS_menuEmpiler = document.getElementById("interfaceMenu");
	document.head.removeChild( CSS_menuEmpiler ) ;
	
	let dtExpire = new Date();
    dtExpire.setTime(dtExpire.getTime() + 3600*1000);
    
    leCookie = getCookie('CookieApp_CO_LeCookie');
    
    if(leCookie != null && leCookie == 1){
    	setCookie('statusMenu', '0', dtExpire, '/',undefined, true, 'None' );
    }

    B25_justCharged = getCookie('B25_landingPage');
   
   if(B25_justCharged == 1){
	   if (window.addEventListener) {
	       window.addEventListener("scroll", empilerAutomatiquementMenu, false);
	   } else if (window.attachEvent) {
	       window.attachEvent("scroll", empilerAutomatiquementMenu);
	   } else {
	       window.onscroll = empilerAutomatiquementMenu;
	   }  
   }
   
   if(leCookie != null && leCookie == 1){
	   setCookie('B25_landingPage', '0', dtExpire, '/',undefined, true, 'None' );
   }
}


/*
 * Onload du badass menu des interfaces 10 11 et 12 
 */

let dtExpire = new Date();
dtExpire.setTime(dtExpire.getTime() + 3600*1000);
statusMenu = getCookie('statusMenu');
leCookie = getCookie('CookieApp_CO_LeCookie');
if(leCookie != null && leCookie == 1){
	setCookie('B25_landingPage', '1', dtExpire, '/',undefined, true, 'None' );
}

let version = getCookie('versionIHM');
let interface = getCookie('interfaceIHM');

if(version == 2) {
	if ( statusMenu == 0 && (interface >= 10 && interface <= 12) ) {
		if (window.addEventListener) {
			window.addEventListener("scroll", empilerAutomatiquementMenu, false);
			//window.addEventListener("mousewheel", empilerAutomatiquementMenu, false);
			//windows.addEventListener("wheel", empilerAutomatiquementMenu, false);
		} else if (window.attachEvent) {
			window.attachEvent("scroll", empilerAutomatiquementMenu);
			//window.attachEvent("mousewheel", empilerAutomatiquementMenu);
			//windows.attachEvent("wheel", empilerAutomatiquementMenu);
		} else {
			/*
             * A TESTER SUR DES ANCIEN NAVIGUATEURS MAIS:
             * normalement ne fonctionne pas car
             * onscroll est un evenement HTML5
             * selon http://www.quirksmode.org/dom/events/scroll.html
             * il fonctionne sur les butineurs > IE5.5 sur l'élément window
             */
			window.onscroll = empilerAutomatiquementMenu;
			//window.onmousewheel = empilerAutomatiquementMenu;
			//window.onwheel = empilerAutomatiquementMenu;
		}
	}
}


/*
 * Onload du slider de défilement de la version2 
 */

function calculPourcentageHauteur() {
	var hauteurDocument = $(document).height(); // Hauteur du document complet
	var hauteurFenetre = $(window).height(); // Hauteur de la fenêtre courante (viewport)
	var position = $(window).scrollTop(); // Position haute au moment du scroll
	var positionDernierEcran = hauteurDocument - hauteurFenetre; // Position haute du dernier écran visible
	var ratioHauteur = position / positionDernierEcran; // Ratio de la hauteur
	var pourcentageHauteur = Math.floor(ratioHauteur * 100); // Pourcentage de la hauteur

	// Affichage de l'évolution du pourcentage de la hauteur dans la console (optionnel)
	console.log("Pourcentage de la hauteur parcourue : " + pourcentageHauteur + "%");

	return pourcentageHauteur;
}

// Barre de défilement horizontale en fonction du scroll
function barreDefilement() {
	var cible = $("#barre-lecture .progression");
	cible.css({
		"width": calculPourcentageHauteur()+"%"
	});
}


// Chargement des fonctions lors du chargement et du scroll
$(window).on("load scroll", function() {
	barreDefilement(); // Barre-lecture
});