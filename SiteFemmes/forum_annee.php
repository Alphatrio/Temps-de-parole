<div class="container">
	<table class ="table table-striped">
		<thead>
			<tr>
				<td> Pseudo </td>
				<td> Date </td>
				<td> Message </td>
			</tr>
		</thead>
		<tbody>
			<?php 
			$bdd = getBD_TDP();
			$aneee=$_GET['annee'];
			$rep = $bdd->query('SELECT * FROM commentaire WHERE ref =' .$annee);
			while ($ligne = $rep ->fetch()) {
				echo '<tr><td> '.$ligne['pseudo'].'</td>'; 
				echo '<td> '.$ligne['dateCom'].'</td>';
				echo'<td>'.$ligne['commentaire_texte'].'</td></tr>';
			}
			?>
		</tbody>

	</table>
</div>