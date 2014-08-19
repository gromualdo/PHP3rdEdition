<html>
<head>
	<title>Eto na</title>
<?php 
	$bg = $_COOKIE['bg'];
	$fg = $_COOKIE['fg'];
?>
</head>
<body bgcolor="<?= $bg; ?>" text="<?= $fg; ?>">
	<p>
		Hi Hello<br />
		Aloha Champola!
	</p>
	<a href="color.php">Repick</a>

<?php


setcookie('fg', '', time()-3600);
echo $bg;
?>
</body>
</html>