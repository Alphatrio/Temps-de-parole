	<div id= "endofpage"></div>
	
	<div class="mb-5"></div>
	<!-- Fixed Footer  -->
	<footer id ="footer" class="bg-dark text-center text-white myfooter">

	<!-- <script> // Pour faire en sorte que le footer tombe toujours en bas de page mais selon le scalling de l'os ça marche pas du coup rip 4h de ma vie

		var end = $( "#endofpage" );
		var position = end.position();
		var screenheight = <?php echo json_encode($_SESSION['screen_height']); ?>;
		//alert(position.top);
		//alert(screenheight);
		if( 0.95*screenheight >= position.top){
			if(document.getElementById("com") == null){
				//alert("bla");
				var footer = $( "#footer" );
				//footer.addClass("position-sticky-bottom");
				footer.css("position","fixed");
				footer.css("bottom","0px");
				//footer.css("text-align","center");
				footer.css("width" ,"100%");
			}
		}
	</script> -->


	  <!-- Grid container -->
	  <div class="container p-4">
		<!-- Section: Social media -->
		<section class="mb-4">

		  <a class="btn btn-outline-light btn-floating m-1" href="https://trello.com/b/RjvxRq7a/projet-temps-de-parole" role="button"
			><i class="fa fa-trello"></i
		  ></a>

		  <!-- Twitter -->
		  <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/" role="button"
			><i class="fa fa-twitter"></i
		  ></a>

		  <!-- Google -->
		  <a class="btn btn-outline-light btn-floating m-1" href="https://discord.gg/EgzCzcuzGS" role="button"
			><i class="fab fa-discord"></i
		  ></a>


		  <!-- Github -->
		  <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Alphatrio/Temps-de-parole" role="button"
			><i class="fa fa-github"></i
		  ></a>
		</section>

		<section>
			<?php
				if(empty($_SESSION['client'])){
					echo '<a class="btn btn-outline-light btn-floating m-1" href="login.php" role="button">';
					echo '<i class="fa fa-sign-in"></i>   Connexion</a>';
				}
			?>


		</section>

		<!-- Section: Social media -->

		<!-- Section: Form -->
		<?php
			if(empty($_SESSION['client'])){
				echo '<section class="">
				<form action="register.php">
					<!--Grid row-->
					<div class="row d-flex justify-content-center">

					<!--Grid column-->
					<div class="col-md-0 col-12">
						<!-- Email input -->

					</div>
					<!--Grid column-->

					<!--Grid column-->
					<div class="col-auto">
						<!-- Submit button -->
						<button type="submit" class="btn btn-secondary mb-4">
						Inscription
						</button>
					</div>
					<!--Grid column-->
					</div>
					<!--Grid row-->
				</form>
				</section>
				<!-- Section: Form -->';
			}
		?>

		<!-- Section: Text -->
		<section>
		  <p>
			<I>Le but de ce site est informatif, les données viennent d'<a href="https://www.data.gouv.fr/en/datasets/temps-de-parole-des-hommes-et-des-femmes-a-la-television-et-a-la-radio/#_">ici</a>, son traitement et sa mise en forme ont étés faits dans le contexte universitaire à l'aide d'outils vus pendant le semsetre 6 <i class="fab fa-html5"></i>  <i class="fab fa-php"></i>  <i class="fas fa-database"></i>   et externes  <i class="fab fa-bootstrap">  <i class="fab fa-js-square"></i></i></I>
		  </p>
		</section>




	  <!-- Copyright -->
	  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		© 2021 Copyright:
		<a class="text-white" href="https://www.univ-montp3.fr/">Université Paul Valéry Montpellier 3</a>
	  </div>
	  <!-- Copyright -->
	</footer>
	<!-- Footer -->
