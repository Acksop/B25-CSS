

btn_logoNET_gauche = new Image();
btn_logoNET_gauche = '/images/besancon25.net_gauche.png';
btn_logoNET_droite = new Image();
btn_logoNET_droite = '/images/besancon25.net_droite.png';
btn_logoCOM_gauche = new Image();
btn_logoCOM_gauche = '/images/besancon25.com_gauche.png';
btn_logoCOM_droite = new Image();
btn_logoCOM_droite = '/images/besancon25.com_droite.png';
btn_logoFR_gauche = new Image();
btn_logoFR_gauche = '/images/besancon25.fr_gauche.png';
btn_logoFR_droite = new Image();
btn_logoFR_droite = '/images/besancon25.fr_droite.png';

function selectionnerDIVimage(elem){
	if ( document.getElementById && document.getElementById( elem ) ){
		 Pdiv = document.getElementById( elem );
	}
	    // Pour les veilles versions
	else if ( document.all && document.all[ elem ] ){
		Pdiv = document.all[ elem ];
	}
	    // Pour les tr?s veilles versions
	else if ( document.layers && document.layers[ elem ] ){
		Pdiv = document.layers[ elem ];
	}
	else{
		return false;
	}
	return Pdiv;
}

function survolCOM( comment ){
	//alert('ok!');
	var gauche = selectionnerDIVimage('logo_gauche');
	var droite = selectionnerDIVimage('logo_droite');

	if( comment ){
		gauche.src=btn_logoCOM_gauche;
		droite.src=btn_logoCOM_droite;
	}else{
		gauche.src=btn_logoFR_gauche;
		droite.src=btn_logoFR_droite;
	}
	return;
}

function survolNET( comment ){
	//alert('ok!');
	var gauche = selectionnerDIVimage('logo_gauche');
	var droite = selectionnerDIVimage('logo_droite');

	if( comment ){
		gauche.src=btn_logoNET_gauche;
		droite.src=btn_logoNET_droite;
	}else{
		gauche.src=btn_logoFR_gauche;
		droite.src=btn_logoFR_droite;
	}
	return;
}
		
		
