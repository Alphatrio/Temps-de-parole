<div class="container addtopmargin addbottommargin">
		<form action="commentaire2.php" method="post" autocomplete="off">
			<div class="form-row">
				<div class="col">
					<p> Votre commentaire : </p>

					<textarea name="com" class="form-control" placeholder="Commentaire" value=""> </textarea>
					<?php echo'<input type="hidden" name="ref" value="'.$_GET['rnomMed'].'">'; ?>
					
				</div>
			</div>	
			<div class="form-row">
				<div class="col offset-0.1 ">
					<button type="submit" class="btn btn-outline-dark btn-floating m-1">Submit</button>
				</div>
			</div>
		</form>
</div>