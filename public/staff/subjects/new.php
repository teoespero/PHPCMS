<?php
	// Teodulfo Espero
	// BS Cloud and Systems Administration
	// Western Governors University 


	require_once('../../../private/initialize.php'); 

	$test = $_GET['test'] ?? '';

	if ($test == '404') {
		# code...
		error_404();
	}
	elseif ($test == '500') {
		# code...
		error_500();
	}
	else {
		# code...
		echo 'No Error';
	}
?>

