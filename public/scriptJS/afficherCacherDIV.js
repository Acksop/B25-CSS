function selectionnerDIV(elem){
	if ( document.getElementById && document.getElementById( elem ) ){
		 Pdiv = document.getElementById( elem );
		 PcH = true;
	}
	    // Pour les veilles versions
	else if ( document.all && document.all[ elem ] ){
		Pdiv = document.all[ elem ];
		PcH = true;
	}
	    // Pour les très veilles versions
	else if ( document.layers && document.layers[ elem ] ){
		Pdiv = document.layers[ elem ];
		PcH = true;
	}
	else{
		PcH = false;
	}
	return Pdiv;
}
function afficherDIV(elem){
  Pdiv = selectionnerDIV(elem);
	Pdiv.style.display='block';
	return;
}
function cacherDIV(elem){
  Pdiv = selectionnerDIV(elem);
	Pdiv.style.display='none';
	return;
}

function ajouterTypeCSS( elem , attrib) {
  Pdiv = selectionnerDIV(elem);
	Pdiv.className += attrib ;
}