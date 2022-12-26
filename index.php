<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">

<head>
	<?php include(THEME_DIR_PHP . 'head.php'); ?>
</head>

<body>
	<?php Theme::plugins('siteBodyBegin'); ?>

	<div class="container">
		<?php
			if ($WHERE_AM_I == 'home'){
				include(THEME_DIR_PHP . 'home.php');
			}else {
				include(THEME_DIR_PHP . 'page.php');
			}
		?>
	</div>	

	<?php Theme::plugins('siteBodyEnd'); ?>
</body>

</html>