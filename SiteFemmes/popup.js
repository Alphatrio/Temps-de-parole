/*	Première version du popup sans fichier dédié
   function popup1(c) {
    // ouvre une fenetre sans barre d'etat, ni d'ascenceur
    var tempsFermeture = 5000;
    w=open("",'popup','left = 10000, top = 10000, width=400,height=200,toolbar=no,scrollbars=no,resizable=yes');
    w.document.write("<title>"+"Remerciment"+"</title>");
    w.document.write("<body> Merci "+"a toi"+' '+c+"<br><br>");
    w.document.write("</body>");
    if(tempsFermeture )setTimeout("w.close();", tempsFermeture);
}
source d'inspiration : https://www.toutjavascript.com/savoir/savoir15.php3
http://www.trucsweb.com/tutoriels/javascript/tw85/
*/

      //essai pop up alternatif qui est bloqué par trop de navigateurs donc abandonné

// function popup() {
//
//     var url = encodeURI("message_popup.php");//url qui redirige vers la page
//     var tempsFermeture = 5000;//variable temps de fermeture de 5 secondes
//     w=open(strUrl=url,'popup','left = 10000, top = 10000, width=400,height=200,toolbar=no,scrollbars=no,dependent=yes,dialog=yes');//$
//     if(tempsFermeture )setTimeout("w.close();", tempsFermeture);//pour fermer la page automatiquement

//$=création d'une page pop up, redirige vers une nouvelle page, type est une popup, top,left pour la position, width,height pour la taille, dialog  enleve les icones de la barre de titre de la fenetre, depent: la pop up depend de la page principale si on la (page principale)ferme la pop up se ferme

function popup1(c){
  alert('merci pour votre commentaire '+c);
}

function popup_inscription(){
  alert('Vous êtes desormais inscrit !');
}
