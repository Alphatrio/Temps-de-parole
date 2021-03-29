<?php
       session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <?php require 'call_bd.php' ;?>
  <meta charset="utf-8">
  <title>TVs</title>
  <?php require_once "./appelstyles.php";?>


</head>

<body>
	<?php require_once "./header.php";?>
  <!-- <div class ="container addalinea"> -->
  <div class="list-group text-center">
    <div class="list-group-item list-group-item-action active bg-danger border-0 rounded-0">
      <tr>
        <?php
          $bdd = getBD_TDP();
          $rep = $bdd->query('SELECT  COUNT(DISTINCT rnomMed) FROM MEDIA WHERE MEDIA.typeMed = "tv"');
          $count = $rep ->fetch();
          // var_dump($count);
            echo '<div class="list-group-item list-group-item-action active disabled bg-danger border-0">TVs ('.$count[0].')</div>';
          $rep ->closeCursor();
        ?>
      </tr>
    </div>
        <?php
          $bdd = getBD_TDP();
          $rep = $bdd->query('SELECT DISTINCT rnomMed FROM MEDIA WHERE MEDIA.typeMed = "tv" ORDER BY rnomMed ASC/* formulaire */');
          while ($ligne = $rep ->fetch()) {
            echo '<tr>';
            echo '<a class="list-group-item list-group-item-action" href="tvPage.php?rnomMed='.$ligne['rnomMed'].'">'.$ligne['rnomMed'].' </a>';
            echo '</tr>';
          }
          $rep ->closeCursor();
        ?>
    </div><br>
  <!-- </div> -->

	<?php require_once "./footer.php";?>


  <?php require_once "./scriptsjs.php";?>
</body>

</html>
