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

  	function commentaire($com,$ref,$pseudo,$date){
        $bdd = getBD_TDP();
        $query = "INSERT INTO commentaire (commentaire_texte,ref,pseudo,dateCom) VALUES(?,?,?,?)";
        $data = array($com,$ref,$pseudo,$date);
        $statement = $bdd->prepare($query); 
        $exec = $statement->execute($data);
    }

    commentaire($_POST['com'],$_POST['ref'],$_SESSION['client']['pseudo'],date('Y-m-d H:i:s'));
    $ref=$_POST['ref'];
    
    echo '<meta http-equiv="Refresh" content="0; URL=year.php?annee='.urlencode($ref).'"/>';
			
            
        ?>
	</head>
	
	<body>
		
		
	</body>
	
	
	
</html>