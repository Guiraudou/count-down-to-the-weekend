<?php
// http://localhost/osimatic/count-down-to-the-weekend
// https://www.osimatic.com/count-down-to-the-weekend
?>
<?php ini_set('default_charset', "utf-8"); ?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- title / desc / keywords-->
	<title>Count down to the weekend</title>
	<meta name="description" content="Compteur jusqu'au prochain week-end" />
	<meta name="keywords" content="count down weekend" />

	<!-- robots -->
	<meta name="robots" content="all" />
	<meta name="revisit-after" content="7 days" />

	<!-- website infos -->
	<meta name="author" content="Benoit Guiraudou" />

	<!-- affichage -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<!--[if lt IE 9]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->

	<!-- style -->

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container-fluid">
			<h1>Prochain week-end</h1>
		</div>
	</header>
	<div class="corps container-fluid">
		<div class="container">
			<br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="panel panel-default ardoise">
						<div class="panel-body">
							<p class="weekend_is_here hide">C'est le weekend !!!</p>
							<div class="countdown hide">
								<span class="nb_days text-bold"></span> jours<br/>
								<span class="nb_hours text-bold"></span> heures<br/>
								<span class="nb_minutes text-bold"></span> minutes<br/>
								<span class="nb_seconds text-bold"></span> secondes<br/>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>
			<br>
		</div>
		<div class="center worker hide">
			<img src="worker.png" alt="" class="" />
		</div>
	</div>
	<footer>
		<div class="container-fluid">
			Made with ❤ by <a href="https://twitter.com/benfett">Benoit Guiraudou</a>. Contribute to this project on <a href="https://github.com/guiraudou/rendement-locatif">GitHub</a>.
		</div>
	</footer>

	<script type="text/javascript">
		var locale = 'fr-FR';
		var timeZone = 'Europe/Paris';
		var currency = 'EUR';
	</script>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

	<script src="js/app.js"></script>
</body>
</html>