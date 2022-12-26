<?php if (empty($content)): ?>
<div class="mt-4">
	<?php $language->p('No pages found') ?>
</div>
<?php endif ?>

<ul class="unstyled-list">
	<?php foreach ($content as $page):?>
		<li class="entry">
			<p class="text-muted nm"><?php echo $page->date(); ?></p>
			<a class="nm" href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a>
		</li>
	<?php endforeach?>
</ul>

<?php if (Paginator::numberOfPages() > 1): ?>
<div>
	<a href="<?php echo Paginator::previousPageUrl(); ?>">Newer</a>
	<a href="<?php echo Paginator::nextPageUrl(); ?>">Older</a>
</div>
<?php endif ?>