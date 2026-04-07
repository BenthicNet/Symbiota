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
		include($SERVER_ROOT . '/includes/quicksearch.php');
		?>
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
				<img src="StateMap.png" class="align-right" alt="Map of Wisconsin showing all waterways colored by size from light to dark blue and an orange star where each participating institution is located.">
				<p>
					<span class="bold-blue">Welcome to BenthicNet</span>, a collaborative project among UW-Parkside, UW-Madison, UW-Stevens Point, and the Milwaukee Public Museum aimed at expanding access to collections of freshwater insects and other invertebrates that are used for biomonitoring. Initial funding for this project has been provided by the Freshwater Collaborative of Wisconsin.
				</p>
				<p>
					<span class="bold-blue">Biomonitoring</span> is the practice of analyzing changes in the numbers and types of freshwater invertebrates to assess water health/quality. Biomonitoring tools first developed in Wisconsin have now been adapted for use globally.
				</p>
				<h3>Portal Scope</h3>
				<p>
					This portal aims ro serve as a collaborative resource to integrate biodiversity data about freshwater benthic macroinvertebartes. the portal allows the generation of maps, checklists and other interactive biodiversity data projects. Users specialized in benthic macroinvertebrate taxonomy are invited to join and contribute to the curation of the Taxonomic Thesaurus. The data within the portal are freely available for use, but proper citation is encouraged.
				</p>
				<h3>Contributing Data</h3>
				<p>
					The BenthicNet portal is primarily for research and reference collections that intend to actively use it for managing specimen occurrence records. For further information or to have a collection data ingested, please contact Jessica Orlofske (orlofske@uwp.edu) or Craig Brabant (brabant@entomology.wisc.edu).
				</p>
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
