<!-- 

Teodulfo Espero
BS Cloud and Systems Administration
Western Governors University 

-->	

<?php

	// check if the value is set

	// Old version of doing it
	// $id = isset($_GET['id']) ? $_GET['id'] : '1';

	// PHP 7.0 version
	$id = $_GET['id'] ?? '1';

	echo $id;

?>