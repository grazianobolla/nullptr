<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">

<head>
	<?php include(THEME_DIR_PHP . 'head.php'); ?>
</head>

<body>
	<?php Theme::plugins('siteBodyBegin'); ?>

	<div class="container">
		<?php include(THEME_DIR_PHP . $WHERE_AM_I . '.php'); ?>
	</div>	

	<?php Theme::plugins('siteBodyEnd'); ?>
</body>

</html>