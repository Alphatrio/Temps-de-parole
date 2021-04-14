 <?php
       session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Les Femmes à la TV et à la Radio</title>
  <?php require_once "./appelstyles.php";



  
      require 'call_bd.php';
      function connecter($id,$mdp){
        $bdd = getBD_TDP();
        $mail = htmlspecialchars ($id);
        $mdp = htmlspecialchars ($mdp);
        $query = "SELECT * FROM utilisateur WHERE pseudo = ? AND mdp_u = ?";
        $data = array($id, $mdp);
        $statement = $bdd->prepare($query);
        $exec = $statement->execute($data);
        $resultat = $statement->fetch();
        if( empty($resultat) ) {
          return -1;
        } 
        else {
          return $resultat;
        }
      }

      $connect = connecter($_POST['id'],$_POST['mdp']);
      if ($connect == -1){
        echo "Veuillez remplir les champs de connexions";
        echo '<META http-EQUIV="Refresh" CONTENT="0; url=login.php"/>';
      }
      else{
        $_SESSION['client']= $connect;
        echo '<META http-EQUIV="Refresh" CONTENT="0; url=index.php"/>';
      }
   ?>

	




</head>

<body>
  
	

</body>
</html>