<html>
<head><title>Preferences Set</title></head>
<body>

<?php
session_start();
	$colors = array(
	'black' => "#000000",
	'white' => "#ffffff",
	'red' => "#ff0000",
	'green' => "#00ff00",
	'blue' => "#0000ff"
	);

$backgroundName = $_POST['background'];
$foregroundName = $_POST['foreground'];
$_SESSION['bg'] = $backgroundName;
$_SESSION['fg'] = $foregroundName;




?>
<p>Thank you. Your preferences have been changed to:<br />
Background: <?php echo $backgroundName; ?><br />
Foreground: <?php echo $foregroundName; ?></p>
<p>Click <a href="prefs_session_demo.php">here</a> to see the preferences
in action.</p>
</body>
</html>
