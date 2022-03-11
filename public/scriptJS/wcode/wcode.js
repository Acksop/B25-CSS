
// Fonction pour afficher l'aide du WCode
function wcode_afficher_aide(){
        window.open('/images/wcode.aide.htm','_blank','toolbar=0, location=0, directories=0, status=0, scrollbars=1, resizable=0, copyhistory=0, menuBar=0, width=730, height=500');
}

function wcode_afficher_code(id){ wcode_div("code_"+id,true); }
function wcode_masquer_code(id){ wcode_div("code_"+id,false); }

function wcode_afficher_citation(id){ wcode_div("citation_"+id,true); }
function wcode_masquer_citation(id){ wcode_div("citation_"+id,false); }


var est_mozilla = (navigator.userAgent.toLowerCase().indexOf('gecko')!=-1) ? true : false;
var wcode_liste_panneaux = ["smileys","taille","couleur","citation","code","liste"];

function wcode_encadrer(formulaire,champ,nom,valeur){
        // Si c'est Mozilla
        if (valeur==''){ balise_ouverture = "["+nom+"]"; }
        else{ balise_ouverture = "["+nom+"="+valeur+"]"; }
        balise_fermeture = "[/"+nom+"]";

        if (est_mozilla){
                champ = document.forms[formulaire].elements[champ];
                valeur = champ.value;
                debut = champ.selectionStart;
                fin = champ.selectionEnd;
                valeur_avant = valeur.substring(0,debut);
                valeur_dedans = valeur.substring(debut,fin);
                valeur_apres = valeur.substring(fin,champ.textLength);
                champ.value = valeur_avant+balise_ouverture+valeur_dedans+balise_fermeture+valeur_apres;
                champ.selectionStart = strlen(valeur_avant);
                champ.selectionEnd = strlen(valeur_avant+balise_ouverture+valeur_dedans+balise_fermeture);
                champ.focus();
                x = valeur_avant.length + balise_ouverture.length;
                champ.setSelectionRange(x,x);
        } else {
                champ = document.forms[formulaire].elements[champ];
                selection = document.selection.createRange().text;
                if (selection.length>0){
                        var obj_selection = document.selection.createRange();
                        obj_selection.text = balise_ouverture + selection + balise_fermeture;
                        obj_selection.collapse();
                        obj_selection.select();
                } else {
                        champ.focus(champ.caretPos);
                        champ.focus(champ.value.length);
                        champ.caretPos = document.selection.createRange().duplicate();
                        var bidon = "%~%";
                        var valeur = champ.value;
                        champ.caretPos.text = bidon;
                        var i = champ.value.search(bidon);
                        var valeur_avant = valeur.substr(0,i);
                        var valeur_apres = valeur.substr(i,valeur.length);
                        champ.value = valeur_avant + balise_ouverture + balise_fermeture + valeur_apres;
                        var retours = 0;
                        for (var j=0;j<valeur_avant.length;j++) if (valeur_avant.charAt(j)=="\n") retours++;
                        position = i + balise_ouverture.length - retours;
                        var obj = champ.createTextRange();
                        obj.moveStart('character',position);
                        obj.collapse();
                        obj.select();
                }


        }
}


function wcode_inserer(formulaire,champ,quoi){
        // Si c'est Mozilla
        if (est_mozilla){
                champ = document.forms[formulaire].elements[champ];
                valeur = champ.value;
                debut = champ.selectionStart;
                fin = champ.selectionEnd;
                valeur_avant = valeur.substring(0,debut);
                valeur_apres = valeur.substring(fin,champ.textLength);
                champ.value = valeur_avant+quoi+valeur_apres;
                champ.selectionStart = strlen(valeur_avant);
                champ.selectionEnd = strlen(valeur_avant+quoi);
                champ.focus();
                x = valeur_avant.length + quoi.length;
                champ.setSelectionRange(x,x);
        } else {
                champ = document.forms[formulaire].elements[champ];
                selection = document.selection.createRange().text;
                if (selection.length>0){
                        var obj_selection = document.selection.createRange();
                        obj_selection.text = quoi;
                        obj_selection.collapse();
                        obj_selection.select();
                } else {
                        champ.focus(champ.caretPos);
                        champ.focus(champ.value.length);
                        champ.caretPos = document.selection.createRange().duplicate();
                        var bidon = "%~%";
                        var valeur = champ.value;
                        champ.caretPos.text = bidon;
                        var i = champ.value.search(bidon);
                        var valeur_avant = valeur.substr(0,i);
                        var valeur_apres = valeur.substr(i,valeur.length);
                        champ.value = valeur_avant + quoi + valeur_apres;
                        var retours = 0;
                        for (var j=0;j<valeur_avant.length;j++) if (valeur_avant.charAt(j)=="\n") retours++;
                        position = i + quoi.length - retours;
                        var obj = champ.createTextRange();
                        r.moveStart('character',position);
                        r.collapse();
                        r.select();
                }


        }
}
/* Script cr  par KevBrok ;-) -->
<!-- Un pti peu adapt ...        -->

<!-- Et MERCI A TOI KEVBROK !!!! */
function wcode_div( nom, quoi ){
        if (document.getElementById && document.getElementById(nom)){
                Pdiv = document.getElementById( nom );
                PcH = true;
        } else if ( document.all && document.all[ divID ] ){
                Pdiv = document.all[ nom ];
                PcH = true;
        } else if ( document.layers && document.layers[ divID ] ){
                Pdiv = document.layers[ nom ];
                PcH = true;
        } else {
                PcH = false;
        }
        if ( PcH ){
         Pdiv.className = ( quoi ) ? '' : 'cachediv';
        }

}

function wcode_tout_masquer(){
        for(var i=0;i<wcode_liste_panneaux.length;i++){
                wcode_div("panneau_"+wcode_liste_panneaux[i],false);
        }
}

function wcode_panneau(nom){
        wcode_tout_masquer();
        wcode_div("panneau_"+nom,true);
}

function wcode_lien(f,c){
 lien = prompt("URL :","http://");
 if (lien!=null) wcode_encadrer(f,c,'lien',lien);
}

function wcode_email(f,c){
 email = prompt("Email :","");
 if (email!=null)  wcode_inserer(f,c,'[email='+email+']');
}
//modification du code VodkaIst
/*Pour Mettre une image*/
function wcode_image(){
 var Option = 'width=700,height=800,scrollbars=yes';
 FenetreChoix = window.open("/scriptPHP/w-code/formulaire_insertion/formulaireImage.php","imagesAChoisir",Option);
}
/*ou un mp3*/
function wcode_mp3(){
 var Option = 'width=700,height=800,scrollbars=yes';
 FenetreChoix = window.open("/scriptPHP/w-code/formulaire_insertion/formulaireMp3.php","ExtraitsMusicauxAChoisir",Option);
}
/*ou une video*/
function wcode_video(){
	 var Option = 'width=700,height=800,scrollbars=yes';
	 FenetreChoix = window.open("/scriptPHP/w-code/formulaire_insertion/formulaireVideo.php","ExtraitsVideoAChoisir",Option);
	}
/*Les fonction d'insertion dans la zone de texte*/
function wcode_videoInsere(f,c,video){
	 if (video!=null)  wcode_inserer(f,c,'[avi='+video+']');
	}
function wcode_mp3Insere(f,c,mp3){
 if (mp3!=null) wcode_inserer(f,c,'[mp3='+mp3+']');
}
function wcode_imageInsere(f,c,image){
 if (image!=null)  wcode_inserer(f,c,'[img='+image+']');
}
/*ou un lien retour*/
function wcode_feedback(){
 var Option = 'width=530,height=800,scrollbar=yes';
 FenetreChoix = window.open("formulaireInsertionFeedBack.php","LienInterneAChoisir",Option);
}
function wcode_feedbackInsere(f,c,lien){
 if (lien!=null)  wcode_encadrer(f,c,'lien',lien);
}
//------------------------------------------
function wcode_inserer_liste(f,c){
        type_liste = document.forms[f].elements['wcode_tliste'].value;
        cont_liste = document.forms[f].elements['wcode_eliste'].value;
        cont_liste = cont_liste.replace(/\\/g,'\\\\');
        cont_liste = cont_liste.replace(/\]/g,'\\]');
        cont_liste = cont_liste.replace(/\[/g,'\\[');
        cont_liste = '[*]' + cont_liste.replace(/\n/g,'\n[*]');
        if (type_liste=='') { cont_liste = '[liste]\n' + cont_liste + '\n[/liste]'; }
        else { cont_liste = '[liste='+type_liste+']\n' + cont_liste + '\n[/liste]'; }
        wcode_inserer(f,c,cont_liste);
}
