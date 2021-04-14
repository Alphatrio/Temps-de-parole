function limite(obj)
{
 var a = document.getElementsByName('chaine[]');//selection du nom
 var j=0;// initialisation de j
 for(var i=0;i<a.length;i++)//boucle sur le nombre d'elements du nom de la chekbox chaine
 {
   if(a[i].checked) j++; //on incremente j si une case est coché
 }
 if(j>6) //si il y a 6 cases coché
 {
    alert('Vous avez coché plus de 6 cases');//on affiche une pop up
    obj.checked=false;//on empeche la classe d'etre coché
	return false;//on sort de la boucle
 }
 return true;
}

//source : https://www.developpez.net/forums/d837267/php/langage/cases-cocher-limiter-2-choix-max/
