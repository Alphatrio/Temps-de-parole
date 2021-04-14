<?php
       session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Les Femmes à la TV et à la Radio</title>
  <?php require_once "./appelstyles.php";?>


</head>

<body>
	<?php
	$a = $_SESSION['client']['pseudo'];//recuperation du pseudo
	echo " <p>Merci ".$a." pour votre retour !</p>";//message à afficher
	?>

</body>
</html>
