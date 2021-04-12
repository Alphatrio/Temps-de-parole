<?php
       session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php
      require 'call_bd.php';

      function enregistrer($id,$mdp,$mail){
        $bdd = getBD_TDP();
        $query = "INSERT INTO UTILISATEUR (pseudo, mdp_u, mail_utilisateur) VALUES (?,?,?)";
        $data = array($id,$mdp,$mail);

        //envoi et execution de la requete à la base
        $statement = $bdd->prepare($query); //preparation
        $exec = $statement->execute($data); //execution
      }

      if ($_POST['pseudo']=="" or $_POST['mail']=="" or $_POST['mdp1']=="" or $_POST['mdp2']=="" or $_POST['mdp1'] !== $_POST['mdp2']) {
        echo '<meta http-equiv="refresh" content="0;URL=register.php?pseudo='.$_POST['pseudo'].'&mail='.$_POST['mail'].'"/>';
      }
      else {
        enregistrer($_POST['pseudo'],$_POST['mdp1'],$_POST['mail']);
        $_SESSION['inscription']='oui';
        echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';

      }
    ?>
    <title>Registration</title>
  </head>

  <body>

  </body>
</html>
