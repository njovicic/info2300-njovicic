<?php header( 'Location:index.html' ) ; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Serbia</title>
		<link rel="icon" type="image/ico" href="images/serbia.ico">
		<link rel="stylesheet" href="styles/normalize.css">
		<link rel="stylesheet" href="styles/main.css">
		<link rel="stylesheet" href="styles/index.css">
		<link rel="stylesheet" href="styles/slicknav.css">
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="js/jquery.slicknav.min.js"></script>
		<script type="text/javascript">
			$(document).read(function(){
				$('#nav_menu').slicknav({prependTo:"#mobile_menu")};
			});
		</script>
	</head>
	<body>
		<header>
			<a href="index.html"><img src="images/serbianflag.jpg" alt="SerbianFlag" width="85"/></a>
			<h1>Србија</h1>
			<h2>The Gem of the Balkans</h2>
		</header>
		<nav id="mobile_menu"></nav>
		<nav id="nav_menu">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="pages/images.html">Gallery</a>
					<ul>
						<li><a href="#">Gallery 1</a></li>
						<li><a href="#">Gallery 2</a>
							<ul>
								<li><a href="#">Sub Gallery 1</a></li>
								<li><a href="#">Sub Gallery 2</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="pages/videos.html">Videos</a></li>
				<li><a href="pages/table.html">Statistics</a></li>
				<li><a href="pages/feedback.html">Contact Us</a></li>
			</ul>
		<main>
			<aside id="nav_list">
				<ul>
					<li><a href="index.html"><img src="images/serbiabackground.jpg" alt="home" width="60">Home</a></li>
					<li><a href="pages/images.html"><img src="images/hramsvetogsave.jpg" alt="images" width="60">Gallery</a></li>
					<li><a href="pages/videos.html"><img src="images/serbiadanube.jpg" alt="videos" width="60">Videos</a></li>
					<li><a href="pages/table.html"><img src="images/serbiavalley.jpg" alt="table" width="60">Statistics</a></li>
					<li><a href="pages/feedback.html"><img src="images/serbiafortress.jpg" alt="feedback" width="60">Contact Us</a></li>
				</ul>
			</aside>
			<article>
				<h3>Welcome</h3>
					<p>Serbia is a sovereign country situated on the Balkan peninsula in Southeastern Europe.</p>
					<p>Serbia is a landlocked country bordered by Croatia, Bosnia and Herzegovina, Montenegro, Macedonia, Hungary, Bulgaria, Romania and Albania.</p>
					<p>The citizens of Serbia identify as Serbian, and the official language of Serbia is the Serbian language.</p>
			</article>
			<aside id="rightaside">
				<h4>Fun Facts!</h4>
					<p>The Serbian clock making industry is older than the Swiss.</p>
					<p>The only Serbian word that is accepted and used across the world is “vampire”.</p>
					<p>Most of Serbian last names end in &quot;ić&quot;.</p>
			</aside>
		</main>
		<footer>
			<p>&copy; 2018 SeeSerbia.com</p>
		</footer>
	</body>
</html>