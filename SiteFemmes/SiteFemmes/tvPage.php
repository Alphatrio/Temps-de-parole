<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php require 'call_bd.php';?>
    <meta charset="utf-8">
    <title>TV</title>
    <?php require_once "./appelstyles.php";?>
  </head>

    <body>
    <?php require_once "./header.php";?>
    <?php $tv = $_GET['rnomMed']; ?>


    <h2 class="display-4 text-center"><?php echo $tv; ?></h2>
    <div class="container text-center addalinea">

      <!-- selection de l'année -->

      <?php

      if(!isset($_POST['submit'])) {
        echo '<form method="post" autocomplete="off">';
        echo '<label>Choisissez une année :</label>';

        $bdd = getBD_TDP();
        $rep = $bdd->query('SELECT COUNT(annee) FROM MEDIA WHERE MEDIA.rnomMed = "'.$tv.'"');
        $nbAnnee = $rep ->fetch();
        echo '<select class="selectRadioTV" name="anneeTV" size="'.$nbAnnee.'">';
        $rep ->closeCursor();

        $rep = $bdd->query('SELECT annee FROM MEDIA WHERE MEDIA.rnomMed = "'.$tv.'" ORDER BY annee ASC');
        while ($ligne = $rep ->fetch()) {
          echo '<option>'.$ligne['annee'].'</option>';
        }
        $rep ->closeCursor();

        echo '</select><br><br>';
        echo '<input class="submit" type="submit" name="submit" value="Valider">';
        echo '</form>';
      }

      //tableau avec temps de parole femmes/hommes selon l'année choisie

      else {
        $anneeTV = $_POST['anneeTV'];
        echo '<p class="anneeMediaChoisi">'.$anneeTV.'</p>';
        echo '<table class="table">';
        echo '<thead class="thead-dark">';
        echo '  <tr>';
        echo '    <th scope="col">Temps de parole : femmes</th>';
        echo '    <th scope="col">Temps de parole : hommes</th>';
        echo '  </tr>';
        echo '</thead>';

        $bdd = getBD_TDP();
        $rep = $bdd->query('SELECT temp_parole FROM MEDIA WHERE MEDIA.rnomMed = "'.$tv.'" AND MEDIA.annee = "'.$anneeTV.'"');
        $tps_parole = $rep ->fetch();
        $percentage = 100;
          echo '<tr>';
          echo '<td>'.$tps_parole['temp_parole'].' %</td>';
          echo '<td>'.($percentage - $tps_parole['temp_parole']).' %</td>';
          echo '</tr>';
          echo '</table><br>';
        $rep ->closeCursor();
    }
    ?>
    <?php require_once "./footer.php";?>




     <?php require_once "./scriptsjs.php";?>



    </body>
  </html>
