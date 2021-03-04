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
  <div class ="container addalinea">
  <div class="list-group">
    <div class="list-group-item list-group-item-action active">
      <tr>
        <?php
          $bdd = getBD_TDP();
          $rep = $bdd->query('SELECT  COUNT(DISTINCT rnomMed) FROM MEDIA WHERE MEDIA.typeMed = "tv"');
          $count = $rep ->fetch();
          // var_dump($count);
            echo '<th>TVs ('.$count[0].')</th>';
          $rep ->closeCursor();
        ?>
      </tr>
    </div>
          <?php
            $bdd = getBD_TDP();
            $rep = $bdd->query('SELECT DISTINCT rnomMed FROM MEDIA WHERE MEDIA.typeMed = "tv" ORDER BY rnomMed ASC/* formulaire */');
            while ($ligne = $rep ->fetch()) {
              echo '<tr>';
              echo '<a href="#" class="list-group-item list-group-item-action">'.$ligne['rnomMed'].'</a>';
              echo '</tr>';
            }
            $rep ->closeCursor();
          ?>
    </div>
    </div>

	<?php require_once "./footer.php";?>




	<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
</div>