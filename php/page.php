<div class="page">
	<?php Theme::plugins('pageBegin'); ?>

	<a href="<?php echo Theme::siteUrl() ?>">../home</a>

	<h1 class="nm"><?php echo $page->title(); ?></h1>

	<?php if (!$page->isStatic() && !$url->notFound()): ?>
	<p class="text-less-muted nm">
		<?php echo $page->date(); ?> ~
		<?php echo $page->relativeTime(); ?>
	</p>
	<?php endif ?>
	
	<?php if ($page->coverImage()): ?>
		<img class="cover-image" alt="Cover Image" src="<?php echo $page->coverImage(); ?>" />
	<?php endif ?>

	<div class="content">
		<?php echo $page->content(); ?>
	</div>

	<?php Theme::plugins('pageEnd'); ?>
</div>

<script>hljs.highlightAll();</script>