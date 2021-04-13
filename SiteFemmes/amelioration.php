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
<br><h1> Aidez nous à améliorer notre site ! </h1>


<div class="container addtopmargin addbottommargin">
		<form action="amelioration2.php" method="post" autocomplete="off">
			<div class="form-row">
				<div class="col">
					<textarea name="ame" id="ame" class="form-control" placeholder="FeedBack" value=""> </textarea>

				</div>
			</div><br>
			<div class="form-row">
				<div class="col offset-0.1 ">
					<button type="submit" class="btn btn-outline-dark btn-floating m-1">Submit</button>
				</div>
			</div>
		</form>
</div><br><br><br><br><br><br><br><br><br>








<?php require_once "./footer.php";?>

<?php require_once "./scriptsjs.php";?>




</body>
</html>
