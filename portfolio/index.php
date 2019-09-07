<?php $page_title = 'Portfolio'; ?>
<?php $basePath = '../resume'; ?>
<?php require $basePath . '/partials/top.php'; ?>

<ul id="projects">
<?php foreach ( $projects as $i => $project ) { ?>
	<li class="project">
		<h2><?php echo $project['title'] ?></h2>

		<?php if ( $project['link'] ) { ?>
			<p class="link">
				<a href="<?php echo $project['link'] ?>" target="_blank">
					Visit <span class="fa fa-long-arrow-right" aria-hidden="true"></span>
				</a>
			</p>
		<?php } ?>

		<ol class="slider images">
			<?php foreach ( $project['images'] as $image ) { ?>
				<li>
					<img src="/portfolio/<?php echo $image ?>" alt="<?php echo $project['title'] ?>" />
				</li>
			<?php } ?>
		</ol>

		<div class="inner">
			<div class="description clear">
				<?php echo trim( $project['description'] ) ?>
			</div>

			<ul class="tags clear">
				<?php foreach ( $project['tags'] as $project_tag ) { ?>
					<li class="tag <?php echo $project_tag ?>">
						<a href="javascript:;"><?php echo $project_tag ?></a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</li>
<?php } ?>
</ul>

<?php require $basePath . "/partials/bottom.php"; ?>
