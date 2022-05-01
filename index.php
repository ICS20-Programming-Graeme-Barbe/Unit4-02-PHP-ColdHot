<html lang="en-ca">
	<head>
		<!-- Meta Data -->
		<meta charset="utf-8" />
	    <meta name="description" content="Guess The Number" />
	    <meta name="keywords" content="immaculata, ics2o" />
	    <meta name="author" content="Graeme" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Favicon -->
	    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
	    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
	    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
	    <link rel="manifest" href="./fav_index/site.webmanifest" />
		<!-- Css style sheet -->
		<link rel="stylesheet"dfghj href="./css/style.css" />
		<title>Guess The Number</title>
	</head>
	<body>
		<!-- Title, Info and image -->
		<center><?php 
			echo '<center><h1>Guess The Number</h1></center>';
			echo '<img src="./images/coldHot.jpeg" width="30%"/>';
			echo "<center><p><br>Input the temperature in degrees celsius and find out if it's hot or cold outside!</p";
			echo "<center><p>Enter your guess below</p>"; 
		?>
		<!-- Textfields -->
		<form method = "post">   
			<p>Temperature (°C) <input type="number" name="temp" step="0.01">   
			<br><br>   
		<!-- Button -->
		<input type = "submit" name = "enter" value="Submit">    
		<br><br>
		<!-- Variables and Calculations -->
		<?php  
			if(isset($_POST['enter'])) {  
				$userTemp = $_POST['temp'];   
				// If statement for no input, hot or cold
				if ($userTemp == "") {
					//No input
					echo "<br><p>You need to input the temperature.</p>";
				} else if ($userTemp < 15) {
					// Tells the user if it's hot or cold out
					echo "<br><p>It's cold out, you might want to wear a jacket.</p>";
				} else {
					echo "<br><p>It's hot out, no jacket needed today.</p>";
				}
			}
		?>
	</body>
</html>