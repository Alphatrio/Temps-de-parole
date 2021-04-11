<?php
       session_start();
?>
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

    <?php $tv = $_GET['rnomMed']; //recuperation du nom du media ?>

    <h2 class="display-4 text-center"><?php echo $tv; //affichage du nom du media?></h2>
    <div class="container text-center addalinea">


      <?php   echo '<div> <img  src=courbeMedia.php?rnomMed='.urlencode($tv).' class="img-fluid" </div>'; //appelle de la courbe de l'evolution du temps de parole?>

      <?php //création d'un formulaire de choix pour afficher les informations d'une année choisie
      if(!isset($_POST['submit'])) {
        echo '<form method="post" autocomplete="off">';
        echo '<label>Choisissez une année :</label><br>';

//A QUOI SERT CETTE PARTIE ?
        $bdd = getBD_TDP();
        $rep = $bdd->query('SELECT COUNT(annee) FROM MEDIA WHERE MEDIA.rnomMed = "'.$tv.'"');
        $nbAnnee = $rep ->fetch();
        echo '<select class="selectRadioTV" name="anneeTV" size="1">'; // try size ="'.$nbAnnee.'"
        $rep ->closeCursor();
// FIN DE LA PARTIE EN QUESTIO

        //recuperation des années pour les quelles on a des informations sur cette chaine pour le formulaire de choix
        $rep = $bdd->query('SELECT annee FROM MEDIA WHERE MEDIA.rnomMed = "'.$tv.'" ORDER BY annee ASC');
        while ($ligne = $rep ->fetch()) {
          echo '<option>'.$ligne['annee'].'</option>';//chaque année est une option
        }
        $rep ->closeCursor();

        echo '</select><br><br>';
        echo '<input class="btn btn-dark" type="submit" name="submit" value="Valider">';
        echo '</form>'; //si on valide le formulaire s'enleve
      }



      else {
        $anneeTV = $_POST['anneeTV']; //on recupere l'année choisie et on l'affiche
        echo '<p class="anneeMediaChoisi">'.$anneeTV.'</p>';
        echo '<table class="table">';//création d'un tableau
        echo '<thead class="thead bg-danger">';
        echo '  <tr>';
        echo '    <th scope="col">Temps de parole : femmes</th>';
        echo '    <th scope="col">Temps de parole : hommes</th>';
        echo '  </tr>';
        echo '</thead>';

        $bdd = getBD_TDP();//on va recuperer l'information  du temps de parole pour l'année choisie
        $rep = $bdd->query('SELECT temps_parole FROM MEDIA WHERE MEDIA.rnomMed = "'.$tv.'" AND MEDIA.annee = "'.$anneeTV.'"');
        $tps_parole = $rep ->fetch();
        $percentage = 100;
          echo '<tr>';
          echo '<td>'.$tps_parole['temps_parole'].' %</td>';
          echo '<td>'.($percentage - $tps_parole['temps_parole']).' %</td>';//calcul du temps des hommes
          echo '</tr>';
          echo '</table><br>';
        $rep ->closeCursor();
        echo'<table class="table ">';
        echo'  <thead class="thead bg-info" >';
        echo'    <tr>';
        echo"      <th scope='col'>Type d'élues</th>";
        echo'      <th scope="col">% femmes</th>';
        echo'      <th scope="col">% hommes</th>';
        echo'    </tr>';
        echo'  </thead>';



                $percentage=100;


                $elues=array();//création tableau type elue
                $bdd = getBD_TDP();
                $annee=$anneeTV;//on selectionne pour l'année données la repartitions des elues
                $sql='SELECT DISTINCT typeElues FROM `elues`';
                $rep = $bdd->query($sql);

                while ($ligne = $rep ->fetch()) {
                  array_push($elues,$ligne['typeElues']);//ici on remplis le tableau pour chaque type d'elues


                  }

                $percentage=100;

                foreach ($elues as $elue) {//pour chaque type d'elues

                  $sql='SELECT * from elues where typeElues="'.$elue.'" and annee='.$annee.'';//on selectionne l'information
                  $rep = $bdd->query($sql);
                  $ligne=$rep->fetch();
                  $a=$annee;




                  while($ligne==NULL){//tant qu'on a pas l'info



                      $a=$a-1;//on regarde un an en arriere

                      $sql='SELECT * from elues where typeElues="'.$elue.'" and annee='.$a.'';
                      $rep = $bdd->query($sql);
                      $ligne= $rep->fetch();






                    }
                //sorti des boucles on a l'info qu'on souhaite
                $homme=$percentage-$ligne['repartitionElues'];


                echo '<tr>';

                echo '<td>'.$elue.'</td>';//a categorie d'elue

                echo '<td>'.$ligne['repartitionElues'].' %</td>';//repartition des femmes
                echo '<td>'.$homme.' %</td>';//repartitions des hommes
                echo '</tr>';




}
                echo'</table>';

                $rep ->closeCursor();

                echo'<table class="table">';
                echo'  <thead class="thead bg-info">';
                echo'    <tr>';
                echo'      <th scope="col">Écart salarial dans le privé</th>';
                echo'      <th scope="col">Écart salarial dans le public</th>';
                echo'    </tr>';
                echo'  </thead>';

                $bdd = getBD_TDP();
                $rep = $bdd->query('SELECT EcartPrive, EcartPublic FROM Esalaire WHERE Esalaire.annee =' .$annee/* formulaire */); //on cherche l'information des inégalités salariales
                while ($ligne = $rep ->fetch()) {
                      echo '<tr>';
                      echo '<td>'.$ligne['EcartPrive'].' %</td>';//les ecarts privées
                      echo '<td>'.$ligne['EcartPublic'].' %</td>';//les ecarts publics
                      echo '</tr>';
                          }
                          $rep ->closeCursor();

    }
    ?>
      </div>
    </div>
    <br> <br>

    <?php require_once "./forum_media.php";?>
    <?php if(empty($_SESSION['client'])){//si aucune session client n'est crée on demande de se connecter pour laisser un com
      echo '<div class="container"><div class="alert alert-warning" role="alert"> Veuillez être connecté pour laisser un commentaire </div></div>';
    }


      else{
      require_once "./commentaire_tele.php";}//appelle de la section commentaire?>
    <?php require_once "./footer.php";?>




     <?php require_once "./scriptsjs.php";?>



    </body>
  </html>
