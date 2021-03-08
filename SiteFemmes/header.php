<div class=" rounded-0 jumbotron text-dark" style="margin-bottom:0px">
		<div class = "container-fluid border-bottom-0">
			<h1 class="text-center display-4">Les Femmes à la TV et à la Radio</h1>
		</div>
</div>
	
	
	<nav class="navbar <?php if($_SESSION['screen_width']>=1000){echo "navbar-expand-sm"; }else{ echo "navbar";} ?> sticky-top navbar-dark bg-dark">
		<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Home <span class="sr-only"></span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="radio.php">Radio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tele.php">Télévision</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link " href="register.php" role="button"><i class="fa fa-sign-in"></i>      S'inscrire</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php" role="button"><i class="fa fa-sign-in"></i>      Se connecter</a>
					</li>
				</ul>
				</div>
			</div>
		</div>
	</nav>