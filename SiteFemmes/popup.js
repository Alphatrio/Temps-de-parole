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

*/

function popup() {
    // ouvre une fenetre sans barre d'etat, ni d'ascenceur
    var url = encodeURI("message_popup.php");
    var tempsFermeture = 5000;
    w=open(strUrl=url,'popup','left = 10000, top = 10000, width=400,height=200,toolbar=no,scrollbars=no,dependent=yes,dialog=yes,minimizable=yes');
    if(tempsFermeture )setTimeout("w.close();", tempsFermeture);
}