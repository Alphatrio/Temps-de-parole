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

  	function feedBack($ame){
        $bdd = getBD_TDP();
        $query = "INSERT INTO amelioration (amelioration_texte) VALUES (?)";
        $data = array($ame);
        $statement = $bdd->prepare($query);
        $exec = $statement->execute($data);
    }

    feedBack($_POST['ame']);
    echo '<meta http-equiv="Refresh" content="0; URL=index.php"/>';
    $_SESSION['feedBack']='oui';


        ?>
	</head>

	<body>


	</body>



</html>
