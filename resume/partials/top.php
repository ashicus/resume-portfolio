<?php require($basePath . "/includes/skills.php") ?>
<?php require($basePath . "/includes/projects.php") ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
	<!--

		Yay, you made it to the source!
		Here's a 🎵 special treat 🎵 just for you:
		http://bit.ly/IqT6zt

	-->

	<meta charset=utf-8 />
	<meta name="author" content="Ash White" />

	<title>Ash M. White | Software Engineer in Athens, GA</title>

	<meta name="description" content="Ash White is a software engineer located in Athens, GA" />

	<link rel="stylesheet" href="<?php echo $basePath ?>/css/style.css" type="text/css" media="screen, print" />
	<link rel="stylesheet" href="<?php echo $basePath ?>/css/print.css" type="text/css" media="<?php echo @$_GET['media'] == 'print' ? 'screen, ' :'' ?>print" />
	<link rel="stylesheet" href="<?php echo $basePath ?>/css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Palanquin+Dark:400,600|Roboto+Slab:400,700" rel="stylesheet">

	<script type="text/javascript" src="<?php echo $basePath ?>/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php echo $basePath ?>/js/master.js"></script>
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
					<a href="https://www.google.com/maps/place/Athens,+GA/@33.9462956,-83.3832952,14z/data=!4m5!3m4!1s0x88f66d19b4b433b9:0x4d747202d69d617c!8m2!3d33.9519347!4d-83.357567" target="_blank">Athens, GA</a>
				</p>

				<div id="summary">
					<p>
						Full stack software engineer with 15 years of experience designing, developing, testing, and
						debugging medium to large scale web applications.
					</p>
				</div>
			</header>
		</section>
