function limite(obj)
{
 var a = document.getElementsByName('chaine[]');
 var j=0;
 for(var i=0;i<a.length;i++)
 {
   if(a[i].checked) j++;
 }
 if(j>6)
 {
    alert('Vous avez coche plus de 6 cases');
    obj.checked=false;
	return false;
 }
 return true;
}
