<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $meta_title ?></title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="public/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" href="public/css/font-awesome.min.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	
	<nav>
		<div class="container nav-wrapper">
			<a href="#" class="brand-logo">Hopla Dog</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="/">Accueil</a></li>
				<li><a href="#">Avis des clients</a></li>
				<li><a href="#">Articles</a></li>
				<li><a href="/#contact">Contact</a></li>
			</ul>
			<ul id="slide-out" class="side-nav">
				<li><a href="/">Accueil</a></li>
				<li><a href="#">Avis des clients</a></li>
				<li><a href="#">Articles</a></li>
				<li><a href="/#contact">Contact</a></li>
			</ul>
			<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</nav>

	<?= $content ?>


	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Hopla Dog</h5>
					<p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi mollitia ducimus ipsam officiis magni! Temporibus nam quos minima autem vel explicabo sequi, soluta voluptates ipsam!</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Liens utiles</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="#!">Accueil</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Avis</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Nous contacter</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Mentions légales</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© 2017 Hopla Dog - Propulsé par <a href="https://nodeimpact.com/" target="_blank">Node Impact</a>
				<a class="grey-text text-lighten-4 right" href="#!">Suivez-nous sur Facebook <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			</div>
		</div>
	</footer>

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="public/js/materialize.min.js"></script>
	<script src="public/js/app.js"></script>
</body>
</html>