<html>
<head>
	<title>Eto na</title>
<?php 
	$bg = $_COOKIE['bg'];
	$fg = $_COOKIE['fg'];
	echo $bg;
	echo $fg;
?>
</head>
<body bgcolor="<?php echo $bg; ?>" text="<?php echo $fg; ?>">
	<p>
		Hi Hello<br />
		Aloha Champola!
	</p>
	<a href="color.php">Repick</a>


</body>
</html>