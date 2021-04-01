<?php
       session_start();

       //LA DOCUMENTATION EST SENSIBLEMENT LA MEME QUE tvPAGE
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
    <?php $radio = $_GET['rnomMed']; //recuperation du nom du media?>
    <?php   echo '<div> <img src=courbeMedia.php?rnomMed='.urlencode($radio).' </div>'; //appelle de la courbe de l'evolution du temps de parole ?>


    <h2 class="display-4 text-center"><?php echo $radio; //affichage du nom du media ?></h2>
    <div class = "maindiv">
      <div class="container text-center addalinea">

        <!-- selection de l'année -->

        <?php //création d'un formulaire de choix pour afficher les informations d'une année choisie

        if(!isset($_POST['submit'])) {
          echo '<form method="post" autocomplete="off">';
          echo '<label>Choisissez une année :</label><br>';

//A QUOI SERT CETTE PARTIE ?
          $bdd = getBD_TDP();
          $rep = $bdd->query('SELECT COUNT(annee) FROM MEDIA WHERE MEDIA.rnomMed = "'.$radio.'"');
          $nbAnnee = $rep ->fetch();
          echo '<select class="selectRadioTV" name="anneeRadio" size="1">'; // try size ="'.$nbAnnee.'"
          $rep ->closeCursor();
// FIN DE LA PARTIE EN QUESTIO

          //recuperation des années pour les quelles on a des informations sur cette chaine pour le formulaire de choix
          $rep = $bdd->query('SELECT annee FROM MEDIA WHERE MEDIA.rnomMed = "'.$radio.'" ORDER BY annee ASC');
          while ($ligne = $rep ->fetch()) {
            echo '<option>'.$ligne['annee'].'</option>';//chaque année est une option
          }
          $rep ->closeCursor();

          echo '</select><br><br>';
          echo '<input class="btn btn-dark" type="submit" name="submit" value="Valider">';
          echo '</form>'; //si on valide le formulaire s'enleve
        }



        else {
          $anneeRadio = $_POST['anneeRadio']; //on recupere l'année choisie et on l'affiche
          echo '<p class="anneeMediaChoisi">'.$anneeRadio.'</p>'; //création d'un tableau
          echo '<table class="table">';
          echo '<thead class="thead bg-success">';
          echo '  <tr>';
          echo '    <th scope="col">Temps de parole : femmes</th>';
          echo '    <th scope="col">Temps de parole : hommes</th>';
          echo '  </tr>';
          echo '</thead>';

          $bdd = getBD_TDP();//on va recuperer l'information  du temps de parole pour l'année choisie
          $rep = $bdd->query('SELECT temps_parole FROM MEDIA WHERE MEDIA.rnomMed = "'.$radio.'" AND MEDIA.annee = "'.$anneeRadio.'"');
          $tps_parole = $rep ->fetch();
          $percentage = 100;
            echo '<tr>';
            echo '<td>'.$tps_parole['temps_parole'].' %</td>';
            echo '<td>'.($percentage - $tps_parole['temps_parole']).' %</td>';//calcul du temps des hommes
            echo '</tr>';
            echo '</table><br>';
          $rep ->closeCursor();
      }
      ?>
      </div>
    </div>
    <br> <br>
    <?php require_once "./forum_media.php";?>
    <?php if(empty($_SESSION['client'])){//si aucune session client n'est crée on demande de se connecter pour laisser un com
      echo "<p> Veuillez être connecté pour laisser un commentaire </p>";
    }


      else{
      require_once "./commentaire_radio.php"; //appelle de la section commentaire
    }?>
    <?php require_once "./footer.php";?>




     <?php require_once "./scriptsjs.php";?>



    </body>
  </html>
