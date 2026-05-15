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
				<img src="<?= $CLIENT_ROOT ?>/images/layout/StateMap.png" class="state-map" alt="Map of Wisconsin showing all waterways colored by size from light to dark blue and an orange star where each participating institution is located.">
				<p>
					<span class="bold-blue">BenthicNet</span> is currently a collaborative project among UW-Parkside, UW-Madison, UW-Stevens Point, and the Milwaukee Public Museum with initial funding from the Freshwater Collaborative of Wisconsin.
				</p>
				<div class="logo-gallery">
					<a href="https://freshwater.wisconsin.edu/" target="_blank" title="<?= $LANG['F_FCW'] ?>" aria-label="<?= $LANG['F_FCW'] ?>">
						<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_fcw.png"  alt="<?= $LANG['F_FCW_LOGO'] ?>" />
					</a>
					<a href="https://www.uwp.edu/learn/beyondtheclassroom/research/naturalhistorycollections.cfm" target="_blank" title="<?= $LANG['F_FCW'] ?>" aria-label="<?= $LANG['F_FCW'] ?>">
						<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_uwp.png"  alt="<?= $LANG['F_FCW_LOGO'] ?>" />
					</a>
					<a href="https://wirc.wisc.edu/" target="_blank" title="<?= $LANG['F_FCW'] ?>" aria-label="<?= $LANG['F_FCW'] ?>">
						<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_wisc.png"  alt="<?= $LANG['F_FCW_LOGO'] ?>" />
					</a>
					<img> <!-- empty tag to align flexbox grid -->
					<a href="https://www3.uwsp.edu/cnr-ap/biomonitoring/Pages/default.aspx" target="_blank" title="<?= $LANG['F_FCW'] ?>" aria-label="<?= $LANG['F_FCW'] ?>">
						<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_uwsp.png"  alt="<?= $LANG['F_FCW_LOGO'] ?>" />
					</a>
					<a href="https://www.mpm.edu/" target="_blank" title="<?= $LANG['F_FCW'] ?>" aria-label="<?= $LANG['F_FCW'] ?>">
						<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_mpm.png"  alt="<?= $LANG['F_FCW_LOGO'] ?>" />
					</a>
				</div>
				<h4>Contributors</h4>
				<div class="contributor-row">
					<div class="contributor-column">
						<ul>
							<li>Jessica Orlofske</li>
							<li>Craig Brabant</li>
							<li>Jeff Dimick</li>
							<li>Chris Tyrrell</li>
							<li>Nick Dowdy</li>
							<li>Julia Colby</li>
							<li>Maybe You?</li>
						</ul>
					</div>
					<div class="contributor-column">
						<ul>
							<li>Hannah Cantin</li>
							<li>Mickayla Denis</li>
							<li>Natalie Diller</li>
							<li>Skylar Johnston</li>
							<li>Cole Kupsch</li>
							<li>Andrew Malacara</li>
							<li>Jack Stecker</li>
							<li>Elyse Upthagrove</li>
							<li></li>
						</ul>
					</div>
				</div>
				<h4>Contributing Data</h4>
				<p>
					To suggest additions, corrections, or to have collection data ingested, please contact Jessica Orlofske (orlofske@uwp.edu) or Craig Brabant (brabant@entomology.wisc.edu).
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
