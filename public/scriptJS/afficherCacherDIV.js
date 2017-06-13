function afficherDIV(elem){
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

	Pdiv.style.display='block';
	return PcH;
}
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

function cacherDIV(elem){
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

	Pdiv.style.display='none';
	return PcH;
}
