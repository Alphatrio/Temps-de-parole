<table>
	<tr>
		<td> Pseudo </td>
		<td> Date </td>
		<td> Message </td>
	</tr>

		<?php
		$bdd = getBD_TDP();
        $media=$_GET['rnomMed'];
				$sql="SELECT * FROM commentaire WHERE ref ='".$media."'";
        $rep = $bdd->query($sql);
        while ($ligne = $rep ->fetch()) {
        	echo '<tr> <td> '.$ligne['pseudo'].'</td>';
        	echo '<td> '.$ligne['dateCom'].'</td>';
        	echo'<td>'.$ligne['commentaire_texte'].'</td></tr>';
        }
        ?>


</table>
