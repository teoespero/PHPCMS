<!-- 

Teodulfo Espero
BS Cloud and Systems Administration
Western Governors University 

--> 

<?php
  if (!isset($pageTitle)){ $pageTitle = 'Staff Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
  	<link rel="stylesheet" type="text/css" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?> ">
    <title>Global Bank International [ <?php echo $pageTitle; ?> ]- CMS</title>
    <meta charset="utf-8">
  </head>

  <body>
  		<header>
  			<h1>Global Bank: Staff Area</h1>
  		</header>

  		<nav>
  			<ul>
  				<li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
  			</ul>
  		</nav>