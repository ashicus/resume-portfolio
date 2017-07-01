<?php $basePath = "../" ?>
<?php require($basePath . "/partials/top.php"); ?>

<ul id="projects">
<?php foreach($projects as $i => $project) { ?>
	<li class="project">
		<ol class="slider images">
			<?php foreach($project['images'] as $image) { ?>
				<li><img src="<?= $image ?>" alt="<?= $project['title'] ?>" /></li>
			<?php } ?>
		</ol>

		<div class="inner">
			<h2><?= $project['title'] ?></h2>

			<?php if($project['link']) { ?>
				<p class="link">
					<a href="<?= $project['link'] ?>" target="_blank">Visit <span class="fa fa-long-arrow-right" aria-hidden="true"></span></a>
				</p>
			<?php } ?>

			<ul class="tags clear">
				<?php foreach($project['tags'] as $tag) { ?>
					<li class="tag <?= $tag ?>"><a href="#<?= $tag ?>"><?= $tag ?></a></li>
				<?php } ?>
			</ul>

			<div class="description clear">
				<?= trim($project['description']) ?>
			</div>
		</div>
	</li>
<?php } ?>
</ul>

<?php require($basePath . "/partials/bottom.php"); ?>
