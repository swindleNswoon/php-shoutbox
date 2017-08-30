<!DOCTYPE html>
<html>
<head>
	<title>Shout it out!</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div id="container">
	<header>
		<h1>Shout it Out! Shoutbox</h1>
		<p id="tagline">Built by Brian Lynch using PHP</p>
		<div id="shouts">
			<ul>
				<li class="shout"><span>11:29 -</span>Brian: Work Hard, Play Hard</li>
				<li class="shout"><span>11:29 -</span>Brian: House on the Hill</li>
				<li class="shout"><span>11:29 -</span>Brian: Woodshop</li>
				<li class="shout"><span>11:29 -</span>Brian: NYC Rental</li>
			</ul>
		</div>
		<div id="input">
			<form method="post" action="process.php">
				<input type="text" name="user" placeholder="Enter Your Name">
				<input type="text" name="message" placeholder="Enter Your Message">
				<input class="shout-btn" type="submit" name="submit" value="Shout it Out!">
			</form>
		</div>
	</header>
</div>
</body>
</html>