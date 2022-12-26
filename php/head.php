<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="generator" content="Bludit">

<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>
<?php echo Theme::metaTags('description'); ?>
<?php echo Theme::favicon('img/favicon.png'); ?>

<!-- Include CSS Styles-->
<?php echo Theme::css('css/style.css'); ?>

<!-- Theme toggler -->
<?php echo Theme::js('js/main.js'); ?>

<!-- Highlightjs style and script -->
<?php echo Theme::js('js/highlightjs/highlight.min.js'); ?>
<?php echo Theme::js('js/highlightjs/gdscript.min.js'); ?>
<?php echo Theme::css('css/highlightjs/a11y-dark.min.css'); ?>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>