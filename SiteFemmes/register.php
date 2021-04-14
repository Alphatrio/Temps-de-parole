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
	<?php require_once "./header.php";?>

	<div class="container addtopmargin addbottommargin">
		<form action="registration.php" method="post" autocomplete="off">
			<div class="form-row">
				<div class="col">
          <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" value=""/>
				</div>
			</div>
      <div class="form-row">
        <div class="col">
          <input type="text" name="mail" class="form-control" placeholder="Adresse e-mail" value=""/>
        </div>
      </div>
			<div class="form-row">
				<div class="col">
          <input type="password" name="mdp1" class="form-control" placeholder="Mot de passe" value=""/>
				</div>
			</div>
			<div class="form-row">
				<div class="col">
          <input type="password" name="mdp2" class="form-control" placeholder="Confirmez le mot de passe" value=""/>
				</div>
			</div><br>
			<div class="form-row">
				<div class="col offset-0.1 ">
					<button type="submit" class="btn btn-outline-dark btn-floating m-1">Submit</button>
				</div>
			</div>
		</form>
		<a class="btn btn-outline-dark btn-floating m-1" href="login.php" role="button"><i class="fa fa-sign-in"></i>   Se connecter</a>



	</div><br><br><br>

	<?php require_once "./footer.php";?>
	<?php require_once "./scriptsjs.php";?>
</body>
</html>
