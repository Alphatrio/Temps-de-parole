<!doctype html>



<html lang="en">
<head>
  <?php require 'call_bd.php' ;?>
  <meta charset="utf-8">

  <title>Les Femmes à la TV et à la Radio</title>

  <?php require_once "./appelstyles.php";?>


</head>

<body>
	<?php require_once "./header.php";?>

	<div class= "container-fluid">

    <table>
      <thead>
        <tr>
          <th>Années</th>
        </tr>
      </thead>
            <?php
              $bdd = getBD_TDP();
              $rep = $bdd->query('SELECT annee FROM Esalaire ORDER BY annee ASC');
              while ($ligne = $rep ->fetch()) {
                echo '<tr>';
                echo '<td><a href="year.php?annee='.$ligne['annee'].'">'.$ligne['annee'].'</a></td>';
                echo '</tr>';
              }
              $rep ->closeCursor();
            ?>
      </table>



	</div>

	<?php require_once "./footer.php";?>











	<?php require_once "./scriptsjs.php";?>






</body>
</html>
