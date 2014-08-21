<?php
include("header.html");
?>
<div id="left">
	<strong><u>Chapter 12 <br />Security</u></strong><br /><br />
	<a href="#st">Cross-Site Scripting</a><br />

</div>
<div id="content">
	<div id="ia" class="ordinary">
		<h1>Cross-Site Scripting</h1>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<input type="text" name="uname" placeholder="input html or js code" />
				<input type="submit" name="check">
			</form>
		<?php

			if(!empty($_POST['uname'])){
				$html = array('uname'=> htmlentities($_POST['uname'], ENT_QUOTES, 'UTF-8'));
			echo "this is secured:  {$html['uname']} <br />";
			echo "this is not secured: " . $_POST['uname'];
			}
		?>
	</div>


	 <!------------------------- New Topic ------------>


	<div id="ia" class="ordinary">
		<h1>SQL Injection</h1>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<input type="text" name="sql" placeholder="try to inject SQL (x' OR 1 ='1)" />
				<input type="submit" name="check">
			</form>
		<?php
			if(!empty($_POST['sql'])){
				$db = new mysqli("localhost", "root", "", "Chapter2Practice");

				$dirty = $_POST['sql'];

				$dirtysql = "SELECT * FROM TC WHERE TCNAME like '%$dirty%'";
				$dirtyresult = $db->query($dirtysql);
				echo "This is injected output:<br />";
				while($dirtyoutput = $dirtyresult->fetch_array()){
					echo "{$dirtyoutput['TCNAME']} is a {$dirtyoutput['TCBATCH']} batch <br />";
				}

				echo "<br />";
				$clean = array();
				$clean['sql'] = $_POST['sql'];
				$mysql = array();
				$mysql['sql']  = mysql_real_escape_string($clean['sql']);
				$sqlget = "SELECT * FROM TC WHERE TCNAME like '%{$mysql['sql']}%'";
				$result = $db->query($sqlget);
				echo "This is a secured output:<br />";
				while($output = $result->fetch_array()){
					echo "{$output['TCNAME']} is a {$output['TCBATCH']} batch <br />";
				}
			}
			
		?>
	</div>

<?php
include("footer.html");



?>