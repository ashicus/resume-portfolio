<? $basePath = "." ?>
<? require($basePath . "/partials/top.php"); ?>
<? require($basePath . "/includes/experience.php"); ?>

<section id="skills">
	<h2>Expertise</h2>
	<ol class="main-list">
		<? foreach($skills as $skill) { ?>
			<li class="tag"><a href="portfolio/#<?= $skill ?>"><?= $skill ?></a></li>
		<? } ?>
	</ol>
</section>

<section id="experience">
	<h2>Experience</h2>
	<ol class="main-list">
		<? foreach($experience as $e) { ?>
			<li>
				<span class="company"><?= $e['company']?> <span class="title"><?= $e['title'] ?></span></span>
				<span class="dates"><?= $e['dates'] ?></span>
				<p class="details">
					<?= $e['summary'] ?>
				</p>
				<ul class="roles">
					<? foreach($e['roles'] as $role) { ?>
						<li><?= $role ?></li>
					<? } ?>
				</ul>
			</li>
		<? } ?>
	</ol>
</section>

<section id="education">
	<h2>Education</h2>
	<ol class="main-list">
		<li>
			<span class="institution">University of Georgia <span class="degree">Master of Internet Technology</span></span>
			<span class="dates">2011</span>
		</li>

		<li>
			<span class="institution">University of Georgia <span class="degree">B.S. Computer Science</span></span>
			<span class="dates">2007</span>
		</li>
	</ol>
</section>

<section id="references">
	<h2>References</h2>
	<ul class="main-list">
		<li>Available upon request</li>
	</ul>
</section>

<section id="elsewhere">
	<h2>Elsewhere</h2>
	<ul class="main-list">
		<li><a href="/resume/portfolio">Portfolio</a></li>
		<li class="stack-overflow"><a href="http://stackoverflow.com/users/288069/ashicus">Stack Overflow</a></li>
		<li class="github"><a href="https://github.com/ashicus">GitHub</a></li>
		<li class="linkedin"><a href="http://www.linkedin.com/profile/view?id=16687579">LinkedIn</a></li>
	</ul>
</section>

<? require($basePath . "/partials/bottom.php"); ?>