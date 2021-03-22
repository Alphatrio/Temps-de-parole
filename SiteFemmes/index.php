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

	<!-- <div class= "container addalinea"> -->

  <div class="list-group text-center">
    <div class="list-group-item list-group-item-action active bg-info border-0 rounded-0">
        <tr>
          <div class="list-group-item list-group-item-action active disabled bg-info border-0">Années</div>
        </tr>
    </div>

            <?php
              $bdd = getBD_TDP();
              $rep = $bdd->query('SELECT annee FROM Esalaire ORDER BY annee ASC');
              while ($ligne = $rep ->fetch()) {
                echo '<tr>';
                echo '<a class="list-group-item list-group-item-action" href="year.php?annee='.$ligne['annee'].'">'.$ligne['annee'].'</a>';
                echo '</tr>';
              }
              $rep ->closeCursor();


            ?>
      </div>




	<!-- </div> -->

	<?php require_once "./footer.php";?>




	<?php require_once "./scriptsjs.php";?>






</body>
</html>
