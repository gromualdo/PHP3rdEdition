

<html>
<head>
	<title>Preference</title>
</head>
<body>
	<?php
		$colors = array(
			'black' => "#000000",
			'white' => "#ffffff",
			'red' => "#ff0000",
			'green' => "#00ff00",
			'blue' => "#0000ff"
		);

		$bgName = $_POST['background'];
		$fgName = $_POST['foreground']; 

		setcookie('bg', $colors[$bgName]);
		setcookie('fg', $colors[$fgName]);
	?>

	<p>
		Thank you!<br />
		Background: <?php echo "bgName"; ?><br />
		Foreground: <?php echo "fgName"; ?>
	</p>
		<a href="prefs_demo.php">Click Here</a>
	</body>
</body>
</html>