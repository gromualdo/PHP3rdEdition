<?php
include("header.html");
?>
<div id="left">
<a href="#fo">Forms</a><br />
<a href="#db">Databases</a><br />
<a href="#gp">Graphics	</a><br />
</div>
<div id="content">
	<div id="#fo" class="ordinary">
		<h1>Forms</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		            Enter your name: <input type="text" name="name" />
		            <input type="submit" />
		        </form>
		<?php
		if(!empty($_POST['name'])) {
		            echo "Greetings, {$_POST['name']}, and welcome.";
		        }
		?>
	 	<br /><a class="totop" href="#header">go to top</a>
	 </div>

<!----------------------- New Topic ------------------------------------>

	 <div id="#db" class="ordinary">
		<h1>Databases</h1>
		<?php
			$db = new mysqli("localhost", "root", "", "Chapter2Practice");

			$sql = "SELECT * FROM FOOD ORDER BY COST";
			$result = $db->query($sql);	
						print "<table>
					<tr>
						<td>Food Name</td>
						<td>Cost</td>
					<tr>";
			while($row = $result->fetch_assoc()) {
			$foodname= $row['FNAME'];
			$foodcost= $row['COST'];
			print "<tr>
						<td>$foodname</td>
						<td>$foodcost</td>
					</tr>
				";
			}
			print "</table>";
		?>
	 	<br /><a class="totop" href="#header">go to top</a>
	 </div>

<?php
include("footer.html");
?>