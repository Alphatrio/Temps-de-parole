<table>
	<tr>
		<td> Pseudo </td>
		<td> Date </td>
		<td> Message </td>
	</tr>
	
		<?php
		$bdd = getBD_TDP();
        $media=$_GET['rnomMed'];
        $rep = $bdd->query('SELECT * FROM commentaire WHERE ref =' .$media);
        while ($ligne = $rep ->fetch()) {
        	echo '<tr> <td> '.$ligne['pseudo'].'</td>'; 
        	echo '<td> '.$ligne['dateCom'].'</td>';
        	echo'<td>'.$ligne['commentaire_texte'].'</td></tr>';
        }
        ?>


</table>