<?php
include("header.html");
?>
<div id="left">
	<strong><u>Chapter 7 <br /> Web Techniques</u></strong><br /><br />
	<a href="#gt">GET</a><br />
	<a href="#mp">Multivalued Parameters</a><br />
	<a href="#vd">Validation</a><br />
	<a href="#sr">Setting Response Header</a><br />
	<a href="#co">Cookies</a><br />
	<a href="#co">Sessions</a><br />
</div>
<div id="content">


	<div id="ia" class="ordinary">
		<h1>Methods</h1>
		<h2>GET</h2>
		<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="submit" value="Roll Dice" name="get">
		<input type="hidden" name="num" value="<?php echo rand(1,6); ?>">
		<br />
		<?php
			if(isset($_GET['get']))
			{
				echo $_GET['num'] ." <br />";
				echo "Look at the URL bar";
			}
		?>

		</form>

		 <br /><a class="totop" href="#header">go to top</a>
	 </div>


	 <!------------------------- New Topic ------------>


	<div id="mp" class="ordinary">
		<h1>Multivalued Parameters</h1>
		<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<select name="languages[]" multiple>
				<option name="c++">C++</option>
				<option name="vb">VB</option>
				<option name="php">PHP</option>
				<option name="java">Java</option>
			</select>
			<input type="submit" name="s" value="Languages Known">
		<?php 
			if (array_key_exists('s', $_GET)) {
				if(empty($_GET['languages'])){
					echo "You know nothing";
				}
				else{
					$description = join(' ', $_GET['languages']);
					echo "You know {$description} language.";
				}
			}
		?>

		</form>
		 <br /><a class="totop" href="#header">go to top</a>
	 </div>


	 <!------------------------- New Topic ------------>


	<div id="vd" class="ordinary">
		<h1>Validation</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="age" placeholder="this will check if age is valid">
			<input type="submit" name="check" value="check">
		</form>
		<?php
		if(isset($_POST['check'])){
			$age = $_POST['age'];
			$checker = preg_match('/^[a-zA-Z]+$/', $age);
			echo $checker;
		}
		?>
		<br /><a class="totop" href="#header">go to top</a>
	 </div>


	 <!------------------------- New Topic ------------>


	<div id="sr" class="ordinary">
		<h1>Setting Response Header</h1>
		<?php 
			header("Content-Type: text/html"); 
			header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
			header("Cache-Control: no-store, no-cache, must-revalidate");
			header("Cache-Control: post-check=0, pre-check=0", false);
			header("Pragma: no-cache");
		?>
		<br /><a class="totop" href="#header">go to top</a>
	 </div>


	 <!------------------------- New Topic ------------>


	<div id="co" class="ordinary">
	<!-- Can't clear cookies -->
		<h1>Cookies</h1>
		<a href="cookies/color.php">Go to Sample</a>
		<br /><a class="totop" href="#header">go to top</a>
	 </div>


	 <!------------------------- New Topic ------------>


	<div id="co" class="ordinary">
		<h1>Sessions</h1>
		<?php
		session_start();
		$_SESSION['refresh'] = $_SESSION['refresh'] +1;
		echo "this has been refreshed {$_SESSION['refresh']} times";
		?>
		<a href="session/color.php">Go to Sample</a>
	 </div>


<?php
include("footer.html");
?>
