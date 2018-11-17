<!-- 

Teodulfo Espero
BS Cloud and Systems Administration
Western Governors University 

-->	

<?php

	require_once('../../../private/initialize.php'); 

	// check if the value is set

	// Old version of doing it
	// $id = isset($_GET['id']) ? $_GET['id'] : '1';

	// PHP 7.0 version
	$id = $_GET['id'] ?? '1';

	$pageTitle  = 'Show Page';
	include(SHARED_PATH . '/staff_header.php');
?>

<div id="content">
	<a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back top list</a>
	<div class="page show">
		<?php echo _NEWLINE . 'Page ID:' . _SPACER. _BOLDSTART . $id . _BOLDEND; ?>
	</div>
</div>
	

<?php include(SHARED_PATH . '/staff_footer.php'); ?>