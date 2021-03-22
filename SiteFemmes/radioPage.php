<?php
       session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php require 'call_bd.php';?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style2.css" type="text/css" />
    <title>Radio</title>
    <?php require_once "./appelstyles.php";?>
  </head>

    <body>
    <?php require_once "./header.php";?>
    <?php $radio = $_GET['rnomMed']; ?>
    <?php   echo '<div> <img src=courbeMedia.php?rnomMed='.$radio.' </div>';?>


    <h2 class="display-4 text-center"><?php echo $radio; ?></h2>
    <div class = "maindiv">
      <div class="container text-center addalinea">

        <!-- selection de l'année -->

        <?php

        if(!isset($_POST['submit'])) {
          echo '<form method="post" autocomplete="off">';
          echo '<label>Choisissez une année :</label><br>';

          $bdd = getBD_TDP();
          $rep = $bdd->query('SELECT COUNT(annee) FROM MEDIA WHERE MEDIA.rnomMed = "'.$radio.'"');
          $nbAnnee = $rep ->fetch();
          echo '<select class="selectRadioTV" name="anneeRadio" size="1">'; // try size ="'.$nbAnnee.'"
          $rep ->closeCursor();

          $rep = $bdd->query('SELECT annee FROM MEDIA WHERE MEDIA.rnomMed = "'.$radio.'" ORDER BY annee ASC');
          while ($ligne = $rep ->fetch()) {
            echo '<option>'.$ligne['annee'].'</option>';
          }
          $rep ->closeCursor();

          echo '</select><br><br>';
          echo '<input class="btn btn-dark" type="submit" name="submit" value="Valider">';
          echo '</form>';
        }

        //tableau avec temps de parole femmes/hommes selon l'année choisie

        else {
          $anneeRadio = $_POST['anneeRadio'];
          echo '<p class="anneeMediaChoisi">'.$anneeRadio.'</p>';
          echo '<table class="table">';
          echo '<thead class="thead bg-success">';
          echo '  <tr>';
          echo '    <th scope="col">Temps de parole : femmes</th>';
          echo '    <th scope="col">Temps de parole : hommes</th>';
          echo '  </tr>';
          echo '</thead>';

          $bdd = getBD_TDP();
          $rep = $bdd->query('SELECT temps_parole FROM MEDIA WHERE MEDIA.rnomMed = "'.$radio.'" AND MEDIA.annee = "'.$anneeRadio.'"');
          $tps_parole = $rep ->fetch();
          $percentage = 100;
            echo '<tr>';
            echo '<td>'.$tps_parole['temps_parole'].' %</td>';
            echo '<td>'.($percentage - $tps_parole['temps_parole']).' %</td>';
            echo '</tr>';
            echo '</table><br>';
          $rep ->closeCursor();
      }
      ?>
      </div>
    </div>
    <br> <br>
    <?php require_once "./footer.php";?>




     <?php require_once "./scriptsjs.php";?>



    </body>
  </html>
