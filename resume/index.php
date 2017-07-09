<?php $basePath = "." ?>
<?php require($basePath . "/partials/top.php"); ?>
<?php require($basePath . "/includes/experience.php"); ?>

<section id="skills">
	<h2>Expertise</h2>
	<ol class="main-list">
		<?php foreach($skills as $skill) { ?>
			<li class="tag">
				<a href="javascript:;"><?php echo $skill; ?></a>
			</li>
		<?php } ?>
	</ol>
</section>

<section id="experience">
	<h2>Experience</h2>
	<ol class="main-list">
		<?php foreach($experience as $e) { ?>
			<li>
				<span class="company">
					<?php if ($e['company_link']) { ?>
						<a href="<?php echo $e['company_link']?>" target="_blank"><?php echo $e['company']?></a>
					<?php } else { ?>
						<?php echo $e['company']?>
					<?php } ?>
					<span class="title"><?php echo $e['title'] ?></span>
				</span>

				<span class="dates"><?php echo $e['dates'] ?></span>

				<p class="details">
					<?php echo $e['summary'] ?>
				</p>

				<ul class="roles">
					<?php foreach($e['roles'] as $role) { ?>
						<?php if (trim($role)) { ?>
							<li><?php echo $role ?></li>
						<?php } ?>
					<?php } ?>
				</ul>
			</li>
		<?php } ?>
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

<!-- <section id="references">
	<h2>References</h2>
	<ul class="main-list">
		<li>Available upon request</li>
	</ul>
</section> -->

<section id="elsewhere">
	<h2>Elsewhere</h2>
	<ul class="main-list">
		<li><a href="<?php echo $basePath ?>/portfolio">Portfolio</a></li>
		<li class="stack-overflow"><a href="http://stackoverflow.com/users/288069/ashicus">Stack Overflow</a></li>
		<li class="github"><a href="https://github.com/ashicus">GitHub</a></li>
		<li class="linkedin"><a href="https://www.linkedin.com/in/ashwhite/">LinkedIn</a></li>
	</ul>
</section>

<?php require($basePath . "/partials/bottom.php"); ?>
