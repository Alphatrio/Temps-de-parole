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

  <table>
    <thead>
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
    </thead>
          <?php
            $bdd = getBD_TDP();
            $rep = $bdd->query('SELECT DISTINCT rnomMed FROM MEDIA WHERE MEDIA.typeMed = "tv" ORDER BY rnomMed ASC/* formulaire */');
            while ($ligne = $rep ->fetch()) {
              echo '<tr>';
              echo '<td>'.$ligne['rnomMed'].' </td>';
              echo '</tr>';
            }
            $rep ->closeCursor();
          ?>
    </table>


	<?php require_once "./footer.php";?>



























  <?php require_once "./scriptsjs.php";?>
</body>
</html>
