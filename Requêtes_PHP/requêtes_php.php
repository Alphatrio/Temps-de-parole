<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php require 'bd.php' ;?>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>PHP SQL</title>
  </head>


  <body>
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
              $bdd = getBDTDP();
              $rep = $bdd->query('SELECT typeElues, repartitionElues FROM ELUES WHERE ELUES.annee = 1995/* formulaire */');
              $percentage = 100;
              while ($ligne = $rep ->fetch()) {
                echo '<tr>';
                echo '<td>'.$ligne['typeElues'].'</td>';
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
                $bdd = getBDTDP();
                $rep = $bdd->query('SELECT EcartPrive, EcartPublic FROM Esalaire WHERE Esalaire.annee = 1995/* formulaire */');
                while ($ligne = $rep ->fetch()) {
                  echo '<tr>';
                  echo '<td>'.$ligne['EcartPrive'].' %</td>';
                  echo '<td>'.$ligne['EcartPublic'].' %</td>';
                  echo '</tr>';
                }
                $rep ->closeCursor();
              ?>
        </table><br>

        <!-- PAGE QUI AFFICHE TOUTES LES RADIOS -->
        <table>
          <thead>
            <tr>
              <?php
                $bdd = getBDTDP();
                $rep = $bdd->query('SELECT  COUNT(DISTINCT rnomMed) FROM MEDIA WHERE MEDIA.typeMed = "radio"');
                $count = $rep ->fetch();
                // var_dump($count);
                  echo '<th>Radios ('.$count[0].')</th>';
                $rep ->closeCursor();
              ?>
            </tr>
          </thead>
                <?php
                  $bdd = getBDTDP();
                  $rep = $bdd->query('SELECT DISTINCT rnomMed FROM MEDIA WHERE MEDIA.typeMed = "radio" ORDER BY rnomMed ASC/* formulaire */');
                  while ($ligne = $rep ->fetch()) {
                    echo '<tr>';
                    echo '<td>'.$ligne['rnomMed'].' </td>';
                    echo '</tr>';
                  }
                  $rep ->closeCursor();
                ?>
          </table><br>

          <!-- PAGE QUI AFFICHE TOUTES LES TVs -->
          <table>
            <thead>
              <tr>
                <?php
                  $bdd = getBDTDP();
                  $rep = $bdd->query('SELECT  COUNT(DISTINCT rnomMed) FROM MEDIA WHERE MEDIA.typeMed = "tv"');
                  $count = $rep ->fetch();
                  // var_dump($count);
                    echo '<th>TVs ('.$count[0].')</th>';
                  $rep ->closeCursor();
                ?>
              </tr>
            </thead>
                  <?php
                    $bdd = getBDTDP();
                    $rep = $bdd->query('SELECT DISTINCT rnomMed FROM MEDIA WHERE MEDIA.typeMed = "tv" ORDER BY rnomMed ASC/* formulaire */');
                    while ($ligne = $rep ->fetch()) {
                      echo '<tr>';
                      echo '<td>'.$ligne['rnomMed'].' </td>';
                      echo '</tr>';
                    }
                    $rep ->closeCursor();
                  ?>
            </table>


    </body>
</html>
