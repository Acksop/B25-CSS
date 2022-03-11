/**
 * effet de Machine a ecrire non évolué pour l'affichage d'un trigger
 * pour le gueuloir et des différentes gueulante provenant d'un appel AJAX
 * sur des fichiers TXT contenus dans data/gueulante et instanciés
 * dans le localStorage HTML5 ou presque
 */

var flag_recursion 
flag_recursion = false;

function CharAleatoire(){
	
	var ListeChar = new Array('a' , 'z' , 'e' , 'r' , 't' , 'y' , 'u' , 'i' , 'o' , 'p' , 'q' , 's' , 'd' , 'f' , 'g' , 'h' , 'j' , 'k' , 'l' , 'm' , 'w' , 'x' , 'c' , 'v' , 'b' , 'n' );
	return ListeChar[Math.floor(Math.random()*ListeChar.length)];
}

function effetRecursifMonospaceMachine(texte , id_div , itx_recursiveMonospaceMachine){
	
	flag_recursion = true;
	// Initialisation du bloc d'affichage
	blocAffichage = selectionnerDIV(id_div);
	
	//recuperation du texte
	texteCourant = blocAffichage.innerHTML;
	var textCourant;
	textCourant='';
	itx_recursiveMonospaceMachine++;
	
	for (i=0 ; i < (texteCourant.length - itx_recursiveMonospaceMachine) ; i++ ){
	textCourant = textCourant + texteCourant.charAt(i);
	}
	
	blocAffichage.innerHTML = textCourant;
	
	if ( textCourant != '' && flag_recursion){
		setTimeout("effetRecursifMonospaceMachine('"+texte+"','"+id_div+"',"+itx_recursiveMonospaceMachine+++")",10);
	}else{
		flag_recursion = false;
		blocAffichage.innerHTML = '';
		setTimeout("effetMonospaceMachine('"+texte+"','"+id_div+"',0,'')",25);
		return;
	}
	
}

function effetMonospaceMachine(texte , id_div , itx_monospaceMachine , texte_courant_monospaceMachine){

	// Initialisation de la zone de texte
	
	texte_courant_monospaceMachine = texte_courant_monospaceMachine + texte.charAt( itx_monospaceMachine );
	
	// Initialisation du bloc d'affichage
	
	blocAffichage = selectionnerDIV(id_div);
	
	// Affichage proprement dit du texte courant
	
	blocAffichage.innerHTML = texte_courant_monospaceMachine;
	
	if ( (itx_monospaceMachine < texte.length-1) && !flag_recursion ){
		itx_monospaceMachine++;
		//modifier la valeur 100 pour un affichage plus rapide ou plus lent
		setTimeout( "effetMonospaceMachine('"+texte+"','"+id_div+"', "+itx_monospaceMachine+",'"+texte_courant_monospaceMachine+"')" , 25 );
	}else{
		return;
	}

}

function effetCribbleMonospaceMachine(texteComplet , id_div , itx , texte_courant){

	// Initialisation de la zone de texte
	
	if(itx % 5 == 0){
		texte = texte_courant + texteComplet.charAt(itx/5);
		texte_courant = texte;
	}else{
		texte = texte_courant + CharAleatoire();
	}
	
	// Initialisation du bloc d'affichage
	
	blocAffichage = selectionnerDIV(id_div);
	
	// Affichage proprement dit du texte courant
	
	blocAffichage.innerHTML = texte;
	
	if ( (itx/5 < texteComplet.length-1) ){
		itx++;
		//modifier la valeur 100 pour un affichage plus rapide ou plus lent
		setTimeout( "effetCribbleMonospaceMachine('"+texteComplet+"','"+id_div+"', "+itx+",'"+texte_courant+"')" , 25 );
	}else{
		//window.alert(texteComplet);
		setTimeout( "effacerTout('"+texteComplet+"','"+id_div+"',0)",30 );
		return;
	}

}
function effacerTout(texteComplet,id_div,itx){
	texte = '';
	if(itx < 10){
		for (i=0 ; i < texteComplet.length ; i++ ){
			texte = texte + CharAleatoire();
		}
	}else if(itx == 10){
		for (i=0 ; i < texteComplet.length ; i++ ){
			texte = texte +  '-';
		}
	}else if(itx==11){
		for (i=0 ; i < texteComplet.length ; i++ ){
			texte = texte +  '_';
		}
	}else{
		texte = texte +  '&nbsp;';
	}
	blocAffichage = selectionnerDIV(id_div);
	blocAffichage.innnerHTML = texte;
	if ( itx < 13 ){
		itx++;
		setTimeout( "effacerTout('"+texteComplet+"','"+id_div+"',"+itx+")",30 );
	}else{
		return;
	}
}


