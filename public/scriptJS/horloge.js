
function remplaceZero(nb) 
{
	return (nb > 9) ? '' + nb : '0' + nb;
}

function Horloge_Start() 
{
	horloge = new Date;
	jour=['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'];
	mois=['Janvier','F&eacute;vrier','Mars','Avril','Mai','Juin','Juillet','Ao&ucirc;t','Septembre','Octobre','Novembre','D&eacute;cembre'];
	var annee = horloge.getUTCFullYear();
	var joursNumero = horloge.getUTCDate();
	var joursd = horloge.getUTCDay();
	var moisd = horloge.getUTCMonth();
	jours = jour[joursd];
	mois = mois[moisd];

	var horloge_print;
	horloge_print = jours + ' ' + remplaceZero(joursNumero) + ' ' + mois + ' ' + annee + ' - ' + remplaceZero(horloge.getHours()) + ':' + remplaceZero(horloge.getMinutes());
	var heureDate;
	heureDate = selectionnerDIV('HeureDate');
	heureDate.innerHTML = horloge_print;

}

function get_B25localTime() 
{
	horloge = new Date;
	jour=['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'];
	mois=['Janvier','F&eacute;vrier','Mars','Avril','Mai','Juin','Juillet','Ao&ucirc;t','Septembre','Octobre','Novembre','D&eacute;cembre'];
	var annee = horloge.getUTCFullYear();
	var joursNumero = horloge.getUTCDate();
	var joursd = horloge.getUTCDay();
	var moisd = horloge.getUTCMonth();
	jours = jour[joursd];
	mois = mois[moisd];

	var horloge_print;
	horloge_print = jours + ' ' + remplaceZero(joursNumero) + ' ' + mois + ' ' + annee + ' - ' + remplaceZero(horloge.getHours()) + ':' + remplaceZero(horloge.getMinutes());
	return horloge_print;

}

//setTimeout('Horloge_Start()',1000);

div_date = selectionnerDIV('HeureDate');
effetCribbleMonospaceMachine( get_B25localTime() , 'HeureDate' , 0 ,'' );