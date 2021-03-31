function popup() {
  // ouvre une fenetre sans barre d'etat, ni d'ascenceur
  w=open("",'popup','width=400,height=200,toolbar=no,scrollbars=no,resizable=yes');
  w.document.write("<title>"+"Remerciment"+"</title>");
  w.document.write("<body> Merci "+$_SESSION['client']['pseudo']+"<br><br>");
  
  w.document.write("</body>");
  w.document.close();
}
