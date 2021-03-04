<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php require 'call_bd.php';?>
    <meta charset="utf-8">
    <title>Année</title>
    <?php require_once "./appelstyles.php";?>
  </head>

    <body>
    <?php require_once "./header.php";?>



      <h2><?php echo $_GET['annee']; ?></h2>

      <!-- TABLEAU ELUES PAR ANNEE -->
      <table>
        <thead>
          <tr>
            <th>Type d'élues</th>
            <th>% femmes</th>
            <th>% hommes</th>
          </tr>
        </thead>
              <?php
                $bdd = getBD_TDP();
                $annee=$_GET['annee'];
                $rep = $bdd->query('SELECT typeElues, repartitionElues FROM ELUES WHERE ELUES.annee =' .$annee /* formulaire */);
                $percentage = 100;
                while ($ligne = $rep ->fetch()) {
                  echo '<tr>';
                  // if ($rep == "") {
                  //   $message == "Désolé, il n'existe pas de données pour cette année et/ou catégorie";
                  //   echo $message;
                  // else {
                  echo '<td>'.$ligne['typeElues'].'</td>';
                  // }
                  echo '<td>'.$ligne['repartitionElues'].' %</td>';
                  echo '<td>'.($percentage - $ligne['repartitionElues']).' %</td>';
                  echo '</tr>';
                }
                $rep ->closeCursor();
              ?>
        </table><br>

        <!-- TABLEAU ECART SALARIAL PAR ANNEE  -->
        <table>
          <thead>
            <tr>
              <th>Écart salarial dans le privé</th>
              <th>Écart salarial dans le public</th>
            </tr>
          </thead>
                <?php
                  $bdd = getBD_TDP();
                  $rep = $bdd->query('SELECT EcartPrive, EcartPublic FROM Esalaire WHERE Esalaire.annee =' .$annee/* formulaire */);
                  while ($ligne = $rep ->fetch()) {
                    echo '<tr>';
                    echo '<td>'.$ligne['EcartPrive'].' %</td>';
                    echo '<td>'.$ligne['EcartPublic'].' %</td>';
                    echo '</tr>';
                  }
                  $rep ->closeCursor();
                ?>
          </table><br>


    <?php require_once "./footer.php";?>



























    <?php require_once "./scriptsjs.php";?>
  </body>
</html>
