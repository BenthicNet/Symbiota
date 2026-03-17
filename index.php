<?php
include_once('config/symbini.php');
include_once($SERVER_ROOT . '/classes/utilities/Language.php');

Language::load('templates/index');

header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
	<title><?php echo $DEFAULT_TITLE; ?> <?php echo $LANG['HOME']; ?></title>
	<?php
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	?>
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<main id="innertext">
		<h1 class="page-heading"><?php echo $DEFAULT_TITLE; ?> <?php echo $LANG['HOME']; ?></h1>
		<?php
		if($LANG_TAG == 'es'){
			?>
			<div>
				<h1 class="headline">Bienvenidos</h1>
				<p>BenthicNet es un proyecto colaborativo entre UW-Parkside, UW-Madison, UW-Stevens Point y el Museo Público de Milwaukee, cuyo objetivo es ampliar el acceso a colecciones de insectos de agua dulce y otros invertebrados utilizados para el biomonitoreo. La financiación inicial para este proyecto ha sido proporcionada por la Freshwater Collaborative of Wisconsin.</p>
			</div>
			<?php
		}
		else{
			//Default Language
			?>
			<div>
				<h1 class="headline">Welcome</h1>
				<p>
					BenthicNet is a collaborative project among UW-Parkside, UW-Madison, UW-Stevens Point, and the Milwaukee Public Museum aimed at expanding access to collections of freshwater insects and other invertebrates that are used for biomonitoring. Initial funding for this project has been provided by the Freshwater Collaborative of Wisconsin.
				</p>
        <p><b>Biomonitoring</b> is the practice of analyzing changes in the numbers and types of freshwater invertebrates to assess water health/quality. Biomonitoring tools first developed in Wisconsin have now been adapted for use globally.</p>
			</div>
			<?php
		}
		?>
	</main>
	<?php if(!empty($GLOBALS['DONATE_LINK']) && file_exists($SERVER_ROOT . '/includes/donationButton.php')): ?>
		<?php include($SERVER_ROOT . '/includes/donationButton.php') ?>
	<?php endif ?>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
