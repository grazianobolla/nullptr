<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">

<head>
	<?php include(THEME_DIR_PHP . 'head.php'); ?>
</head>

<body>
	<?php Theme::plugins('siteBodyBegin'); ?>

	<div class="container">
		<?php
			if ($WHERE_AM_I == 'page'){
				include(THEME_DIR_PHP . 'page.php');
				return;
			}

			include(THEME_DIR_PHP . 'home.php');
		?>
	</div>	

	<?php Theme::plugins('siteBodyEnd'); ?>
</body>

</html>