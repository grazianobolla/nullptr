<div class="home">
	<p><?php echo $site->title(); ?></p>

	<?php foreach ($staticContent as $staticPage): ?>
		<a class="text-less-muted" href="<?php echo $staticPage->permalink() ?>">- <?php echo $staticPage->title() ?></a>
	<?php endforeach ?>

	<a class="text-less-muted" href="/category/archive">- Archive</a>

	<?php foreach (Theme::socialNetworks() as $key => $label): ?>
		<a class="text-less-muted" href="<?php echo $site->{$key}(); ?>">- <?php echo $label; ?></a>
	<?php endforeach; ?>
</div>

<?php include(THEME_DIR_PHP . 'posts.php'); ?>