<? $basePath = "../" ?>
<? require($basePath . "/partials/top.php"); ?>

<ul id="projects">
<? foreach($projects as $i => $project) { ?>
	<li class="project">
		<ol class="images">
			<? foreach($project['images'] as $image) { ?>
				<li><img src="<?= $image ?>" alt="<?= $project['title'] ?>" /></li>
			<? } ?>
		</ol>

		<h2><?= $project['title'] ?></h2>

		<? if($project['link']) { ?>
			<p class="link">
				<a href="<?= $project['link'] ?>" target="_blank">Visit &rarr;</a>
			</p>
		<? } ?>

		<ul class="tags clear">
			<? foreach($project['tags'] as $tag) { ?>
				<li class="tag <?= $tag ?>"><a href="#<?= $tag ?>"><?= $tag ?></a></li>
			<? } ?>
		</ul>

		<div class="description clear">
			<?= trim($project['description']) ?>
		</div>
	</li>
<? } ?>
</ul>

<? require($basePath . "/partials/bottom.php"); ?>