<?php require($basePath . "/includes/skills.php") ?>
<?php require($basePath . "/includes/projects.php") ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
	<!--

	Yay, you made it to the source!
	Here's a special treat just for you: http://tinyurl.com/2g9mqh

	-->

	<meta charset=utf-8 />
	<meta name="author" content="Ash White" />

	<title>Ash M. White | Resume & Portfolio</title>

	<meta name="description" content="Ash White is a software engineer located in Athens, GA" />

	<link rel="stylesheet" href="<?php echo $basePath ?>/css/style.css" type="text/css" media="screen, print" />
	<link rel="stylesheet" href="<?php echo $basePath ?>/css/print.css" type="text/css" media="<?php echo @$_GET['media'] == 'print' ? 'screen, ' :'' ?>print" />

	<script type="text/javascript" src="<?php echo $basePath ?>/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php echo $basePath ?>/js/master.js"></script>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	<div id="container">
		<section id="about">
			<header>
				<p class="photo">
					<img src="<?php echo $basePath ?>/images/ash_white.jpg" alt="Ash M. White" />
				</p>

				<h1><a href="<?php echo $basePath ?>">Ash M. White</a></h1>

				<p class="info">
					<span class="label">Phone</span>
					<span id="phone-number">Turn on JavaScript</span>
				</p>

				<p class="info">
					<span class="label">Email</span>
					<a id="email-link" href="#">Turn on JavaScript</a>
				</p>

				<p class="info">
					<span class="label">Location</span>
					Athens, GA
				</p>

				<div id="summary">
					<!-- <p>
						I am a software engineer who is well-versed in a wide variety of technologies and platforms.
						I'm a self-starter and a natural problem solver.
						I'm passionate, motivated, and I play well with others.
					</p>
					<p>
						My goal is to continue my never-ending adventures in the world of creating great things.
						<span id="portfolio-link">Check out my <a href="/resume/portfolio">portfolio</a>.</span>
					</p> -->
				</div>
			</header>
		</section>
