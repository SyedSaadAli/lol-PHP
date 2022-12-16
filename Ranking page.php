<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 

<title>Session 08: Further PHP Programming</title>
<!-- Include Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/layout1.css" rel="stylesheet">

</head>
<body>
	<div class="container">
		<div class="header clearfix">
			<nav>
			<ul class="nav nav-pills pull-right">
					<li role="presentation" class="active"><a href="index.php">Home</a></li>
					<li role="presentation"><a href="Ranking page.php">Ranking page  </a></li>
					<li role="presentation"><a href="console page.php">Console Overview</a></li>
					<li role="presentation"><a href="signin.php">User Page</a></li>
					<li role="presentation"><a href="#">Contact Us</a></li>
				</ul>
			</nav>
			<h3 class="text-muted">Gaming Review</h3>
		</div>
		<div class="carousel slide" id="myCarousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li class="active" data-target="#myCarousel" data-slide-to="0"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="img/RocketLeague.png">
					<div class="container">
						<div class="carousel-caption">
							<h2>Player Spotlight</h2>
							<p class="lead">Your guide to Barca's Elite</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="img/Minecraft1.png">
					<div class="container">
						<div class="carousel-caption">
							<h2>Player Spotlight</h2>
							<p class="lead">Your guide to Barca's Elite</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="img/plybg2.jpg">
					<div class="container">
						<div class="carousel-caption">
							<h2>Player Spotlight</h2>
							<p class="lead">Your guide to Barca's Elite</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="icon-prev"></span></a> 
			<a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="icon-next"></span></a>
			
		</div>

		<ul class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Players</li>
		</ul>
		
		<div class="row">
			<div class="panel panel-primary">
				<h2>Ranking System</h2>
				<p>List of Key First-Games</p>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Rank</th>
							<th>Game Name</th>
							<th>Age</th>
							<th>Nationality</th>
							<th>Nationality</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td><a href="Games page.php">Rocket League</a></td>
							<td>Marc-Andre ter Stegen</td>
							<td>Belgian</td>
							<td>Belgian</td>
						</tr>
						<tr>
							<td>2</td>
							<td><a href="Games page.php">Minecraft</a></td>
							<td>Gerard Pique</td>
							<td>Spanish</td>
							<td>Belgian</td>
						</tr>
						<tr>
							<td>3</td>
							<td><a href="Games page.php">Crash Bandicoot</a></td>
							<td>Ivan Rakitic</td>
							<td>Croatian</td>
							<td>Belgian</td>
						
						
						<tr>
							<td>4</td>
							<td><a href="Games page.php">Fifa 22</a></td>
							<td>Sergio Busquets</td>
							<td>Spanish</td>
							<td>Belgian</td>
						</tr>
						<tr>
							<td>5</td>
							<td><a href="Games page.php">Fortnite</a></td>
							<td>Arda Turan</td>
							<td>Turkish</td>
							<td>Belgian</td>
						</tr>
						<tr>
							<td>6</td>
							<td><a href="Games page.php">Uncharted 4</a></td>
							<td>Andres Iniesta (Captain)</td>
							<td>Spanish</td>
							<td>Belgian</td>
						</tr>
						<tr>
							<td>7</td>
							<td><a href="Games page.php">Little Big Planet 3</a></td>
							<td>Luis Suarez</td>
							<td>Uruguayan</td>
							<td>Belgian</td>
						</tr>
						<tr class="primary">
							<td>8</td>
							<td><a href="Games page.php">Injustice 3</a></td>
							<td>Lionel Messi</td>
							<td>Argentinean</td>
							<td>Belgian</td>
						</tr>	
						<tr>
							<td>9</td>
							<td><a href="Games page.php">Marvel Spider-Man</a></td>
							<td>Samuel Umtiti</td>
							<td>French</td>
							<td>Belgian</td>
						</tr>
						<tr>
							<td>10</td>
							<td><a href="Games page.php">Need For Speed</a></td>
							<td>Jeremy Mathieu</td>
							<td>French</td>
							<td>Belgian</td>
						</tr>					

					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">Key Players</div>
				<div class="panel-body">
					<div class="list-group">
						<a class="list-group-item" href="#">
							<h4 class="list-group-item-heading">Lionel Messi</h4>
							<p class="list-group-item-text">Argentinean Maestro, widely
								considered one of the greatest players ever to grace a pitch.</p>
						</a> <a class="list-group-item" href="#">
							<h4 class="list-group-item-heading">Luis Suarez</h4>
							<p class="list-group-item-text">Majestic, yet volatile Striker,
								who has risen to become one of the deadliest marksmen in world
								football.</p>
						</a> <a class="list-group-item" href="#">
							<h4 class="list-group-item-heading">Neymar</h4>
							<p class="list-group-item-text">With silky skills making way to
								excellent team play, great understanding and pace to burn,
								Neymar is fast becoming a Barca legend.</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="alert alert-dismissible alert-info">
				<button class="close" type="button" data-dismiss="alert">&times;</button>
				<strong>Heads up!</strong> This <a class="alert-link" href="#">data
					is available as a feed</a>, but it's not been made public yet..
			</div>
		</div>
		<footer class="footer">
		<p>&copy; Jawdat Shaat 100546 - LJMU</p>
	</footer>

	</div>
	<!-- /container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.2.4.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.js"></script>
	<!-- Include Holder Generator JS -->
	<script src="js/holder.js"></script>
</body>
</html>