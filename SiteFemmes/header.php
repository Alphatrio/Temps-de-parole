<div class=" rounded-0 jumbotron" style ="margin-bottom:0px; background: linear-gradient(to bottom right, #5b5ea6,50%,#363763) ">
		<div class = "container-fluid center">
			<h1 class="text-center">Les Femmes à la TV et à la Radio</h1>
		</div>
</div>
	
	
	<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-dark">
			<a class="navbar-brand" href="#top"><?php
					$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					//echo $link;
					echo substr($link,28,-4);
				?>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link active" href="index.php">Home <span class="sr-only"></span></a>
				<a class="nav-item nav-link" href="radio.php">Radio</a>
				<a class="nav-item nav-link" href="tele.php">Télévision</a>
				<a class="nav-item nav-link" href="register.php" role="button"><i class="fa fa-sign-in"></i>      S'inscrire/Se connecter</a>
				
			</div>
		</div>
	</nav>