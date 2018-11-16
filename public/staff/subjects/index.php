<!-- 

Teodulfo Espero
BS Cloud and Systems Administration
Western Governors University 

-->

<! DOCTYPE html>
<html lang="en">
<html>
	<head>	
			<meta charset="utf-8">
			<title>teoespero.com | UDFs - PHP Programming</title>
			<meta name="description" content="">
  			<meta name="author" content="teoespero">
	</head>
	<body>
		<?php

			// define constants
			define("_NEWLINE", "<br>");
			define("_SPACER", " ");
			define("_BOLDSTART", "<strong>");
			define("_BOLDEND", "</strong>");
			define("_ITALICSTART", "<em>");
			define("_ITALICEND", "</em>");
			
			// FUNCTION LIST

			function paintColor($color="Red"){
				return "The color:" . _SPACER . $color . _NEWLINE;
			}

			// MAIN PROGRAM 

			echo paintColor("Blue");
			echo paintColor();

		?>


	</body>
</html>

