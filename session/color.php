<?php
session_start();
?>

<html>
<head>
	<title>Colors</title>
</head>
<body>
	<form action="pref_session.php" method="POST">
	<p>Background:
		<select name="background">
			<option value="black"> Itim</option>
			<option value="white"> Puti</option>
			<option value="red"> Pula</option>
			<option value="green"> Berde</option>
			<option value="blue"> Bughaw</option>
		</select><br />

		Foreground:
		<select name="foreground">
			<option value="black"> Itim</option>
			<option value="white"> Puti</option>
			<option value="red"> Pula</option>
			<option value="green"> Berde</option>
			<option value="blue"> Bughaw</option>
		</select></p>

		<input type="submit" value="Change Color">
	</form>
	<br />
	<a href="../chapter7.php">Go back to reviewer</a>
</body>
</html>