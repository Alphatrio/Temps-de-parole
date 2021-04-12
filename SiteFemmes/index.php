<?php //require_once = "./sessionstart.php"
  session_start();
  if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
      //echo 'User resolution: ' . $_SESSION['screen_width'] . 'x' . $_SESSION['screen_height'];
  } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) {
      $_SESSION['screen_width'] = $_REQUEST['width'];
      $_SESSION['screen_height'] = $_REQUEST['height'];
      header('Location: ' . $_SERVER['PHP_SELF']);
  } else {
      echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>';
  }
 ?>
<!doctype html>
<html lang="fr">
  <head>
    <?php require 'call_bd.php' ;?>
    <meta charset="utf-8">
    <script type="text/javascript" src="popup.js"> </script>
    <title>Les Femmes à la TV et à la Radio</title>
    <?php require_once "./appelstyles.php";?>
  </head>


  <!-- essai pop up alternatif qui est bloqué par trop de navigateurs donc abandonné -->
    <?php
   //  if (!(empty($_SESSION['feedBack']))){//si une amelioration est faite
   //
   //  unset($_SESSION['feedBack']);//on detruit la session amelioration
   //  echo " <body onload = popup()>"; }//on appelle la pop up
   //
   // else {//sinon création du body simplement
   // 	echo "<body>";}
    ?>

      <?php
        if (!(empty($_SESSION['inscription']))) { // Si une inscription est faite
          unset($_SESSION['inscription']); // On détruit la session inscription
          echo "<body onload = popup_inscription()>"; // on appelle la popup inscription
        }

        if (!(empty($_SESSION['feedBack']))){//si une amelioration est faite
          $a=$_SESSION['client']['pseudo'];//recuperation pseudo
          unset($_SESSION['feedBack']);//on detruit la session amelioration
          echo " <body onload = popup1('$a')>"; }//on appelle la pop up

       else {//sinon création du body simplement
       	echo "<body>";}?>

  	<?php require_once "./header.php";?>

    <div class = "maindiv">
      <div class="list-group text-center">
            <tr>
              <h4 class="list-group-item list-group-item-action active disabled bg-info border-0">Années</h4>
            </tr>
            <?php
              $bdd = getBD_TDP();
              $rep = $bdd->query('SELECT annee FROM Esalaire ORDER BY annee DESC');
              echo '<div class="container mt-4">
                        <div class="row equal align-items-start">';

              while ($ligne = $rep ->fetch()) {
                 echo '<tr><div class="col-md-4"><a class="list-group-item list-group-item-action" href="year.php?annee='.$ligne['annee'].'">'.$ligne['annee'].'</a></div>';
                 echo '</tr>';
              }
              $rep ->closeCursor();

              echo '</div></div>';

            ?>
          </div>
  	</div><br><br>

  	<?php require_once "./footer.php";?>
  	<?php require_once "./scriptsjs.php";?>

  </body>
</html>
