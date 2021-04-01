<?php
       session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <script type="text/javascript" src="limite.js" > </script>
    <?php require 'call_bd.php';?>
    <meta charset="utf-8">
    <title>Année</title>
    <?php require_once "./appelstyles.php";?>
  </head>

    <body>

    <?php require_once "./header.php";?>
    <br>

      <h2 class="display-4 text-center"><?php echo $_GET['annee'];//recuperation de l'année ?></h2>
    <div class="container text-center addalinea">
        <!-- TABLEAU ELUES PAR ANNEE -->
        <table class="table">
          <thead class="thead bg-info" >
            <tr>
              <th scope="col">Type d'élues</th>
              <th scope="col">% femmes</th>
              <th scope="col">% hommes</th>
            </tr>
          </thead>

                <?php

                  $bdd = getBD_TDP();
                  $annee=$_GET['annee'];//on selectionne pour l'année données la repartitions des elues
                  $rep = $bdd->query('SELECT typeElues, repartitionElues FROM ELUES WHERE ELUES.annee =' .$annee /* formulaire */);
                  $percentage = 100;
                  $isempty = TRUE;
                  while ($ligne = $rep ->fetch()) {
                    $isempty = TRUE;
                    echo '<tr>';

                    echo '<td>'.$ligne['typeElues'].'</td>';//a categorie d'elue

                    echo '<td>'.$ligne['repartitionElues'].' %</td>';//repartition des femmes
                    echo '<td>'.($percentage - $ligne['repartitionElues']).' %</td>';//repartitions des hommes
                    echo '</tr>';

                  }











                  ?>
                <?php

                if(!isset($_POST['submit'])) { //création d'une chekbox pour choisir les chaines a comparer
                  echo '<br><form method="POST" autocomplete="off">';
                  echo '<label>Choisissez les chaines que vous souhaitez comparer (6 max) :</label><br>';

                  $bdd = getBD_TDP();
                  $rep = $bdd->query('SELECT * FROM MEDIA WHERE MEDIA.annee = "'.$annee.'"');//on selection les chaines pour les quelles on a une info sur cette année

                  while ($chaines = $rep ->fetch()) {
                    echo '<input type="checkbox"  onclick="limite(this)" name="chaine[]" value="'.$chaines['rnomMed'].'"> '.$chaines['rnomMed'].'<br>';//la chaine est une option en plus + appelle fonction js qui empehce d'en selectionner plus de 6
                  }
                  $rep ->closeCursor();

                  // echo '</select><br><br>';
                  echo '<br><input class="btn btn-dark" type="submit" name="submit" value="Valider"><br>';
                  echo '</form>';
                  echo '<br>';
                }



                else {//des que le tableau est validé on crée une variable de session pour recupere les chaines afin d'afficher le graphiques correspondant
                  if(isset($_POST['chaine'])){
                    $chainesChoisies = array();
                    foreach ($_POST['chaine'] as $chaine) {

                        array_push($chainesChoisies, $chaine); //on ajoute la caine dans la session
                      }


                      $_SESSION['chainesChoisies']=$chainesChoisies;
                      $_SESSION['annee']=$annee;
                      echo '<div> <img src=graphAnnee.php </div>';// on appelle le graphique qui va se charger selon les chaines cochés

                  }
                  else {
                    echo '<br>Pour accéder au graphique, veuillez selectionner au moins une chaine radio/TV<br><br>';
                  }
              }
              echo '<div> <a href="histoAll.php?annee='.$annee.'" target="_blank"> acceder à toutes les chaines </a></div>'; //lien vers un histogramme affichant toutes les chaines sur un nouvel onglet
                ?>

          </table><br>

          <!-- TABLEAU ECART SALARIAL PAR ANNEE  -->
          <table class="table">
            <thead class="thead bg-info">
              <tr>
                <th scope="col">Écart salarial dans le privé</th>
                <th scope="col">Écart salarial dans le public</th>
              </tr>
            </thead>
                  <?php
                    $bdd = getBD_TDP();
                  $rep = $bdd->query('SELECT EcartPrive, EcartPublic FROM Esalaire WHERE Esalaire.annee =' .$annee/* formulaire */); //on cherche l'information des inégalités salariales
                    while ($ligne = $rep ->fetch()) {
                      echo '<tr>';
                      echo '<td>'.$ligne['EcartPrive'].' %</td>';//les ecarts privées
                      echo '<td>'.$ligne['EcartPublic'].' %</td>';//les ecarts publics
                      echo '</tr>';
                    }
                    $rep ->closeCursor();

                  ?>



            </table><br>

    </div>



    <?php require_once "./forum_annee.php";?>
     <?php if(empty($_SESSION['client'])){//si pas de connexion, on demande la connexion
      echo "<p> Veuillez être connecté pour laisser un commentaire </p>";
    }


      else{// si connexion on affiche l'espace commentaires
      require_once "./commentaire_annee.php";}?>
    <?php require_once "./footer.php";?>
    <?php require_once "./scriptsjs.php";?>
  </body>
</html>
