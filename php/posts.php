<?php if (empty($content)): ?>
<div class="mt-4">
	<?php $language->p('No pages found') ?>
</div>
<?php endif ?>

<ul class="unstyled-list">
	<?php foreach ($content as $page)
		include(THEME_DIR_PHP . 'entry.php');
	?>
</ul>

<?php if (Paginator::numberOfPages() > 1): ?>
<div>
	<a class="<?php if (!Paginator::showPrev()) echo 'disabled text-muted' ?>" href="<?php echo Paginator::previousPageUrl(); ?>">Newer</a>
	<a class="<?php if (!Paginator::showNext()) echo 'disabled text-muted' ?>" href="<?php echo Paginator::nextPageUrl(); ?>">Older</a>
</div>
<?php endif ?>