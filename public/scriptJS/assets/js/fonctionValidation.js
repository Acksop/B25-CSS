function validerFormContact(){
	var re_email = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z0-9-]+)$/ ;
	if(document.formContact.Nom.value != ""){
		if(re_email.test(document.formContact.Courriel.value)){
			if(document.formContact.Objet.value != ""){
				if(document.formContact.Message.value != ""){
					return true;
				}else{
					alert("Saisissez un message");
				}
			}else{
			alert("Saisissez un objet pour le message");
			}
		}else{
			alert("Saisissez un email valide");
		}
	}else{
		alert("Saisissez votre nom");
	}
	return false;
}

function estNonVide(elem){
	var ch = elem.value;
	if(ch == null || ch.length == 0){
		return false;
	}else{
		return true;
	}
}
function estCourriel(elem){
	var ch = elem.value;
	var re_email = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z0-9-]+)$/ ;
	if(!re_email.test(ch)){
		return false;
	}else{
		return true;
	}
}
function donnerFocus(nomFormulaire,nomElement){
	var elem = document.forms['nomFormulaire'].elements['nomElement'];
	elem.focus();
	elem.select();
	return true;
}

function afficherCoche(elem){
	document.getElementById(elem).style.visibility='visible';
	return true;
}
function cacherCoche(elem){
	document.getElementById(elem).style.visibility='hidden';
	return true;
}
