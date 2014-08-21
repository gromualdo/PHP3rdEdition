<?php
include("header.html");
?>
<div id="left">
	<strong><u>Chapter 8 <br /> Databases</u></strong><br /><br />
	<a href="#st">MySQLi Add</a><br />
	<a href="#st">MySQLi Retrieve</a><br />

</div>
<div id="content">
	<div id="ia" class="ordinary">
		<h1>MySQLi Add</h1>
		<?php
		$db = new mysqli("localhost", "root", "", "Chapter2Practice");
		$sqlcreate = "CREATE Table TC (
			TCID int Primary key auto_increment,
			TCNAME varchar(30),
			TCBATCH varchar(20))";

		$db->query($sqlcreate);
		$sqlinsert = "INSERT INTO TC (TCID, TCNAME, TCBATCH) VALUES (2, 'Kay', 'June'), 
		(3, 'Jay', 'June'),
		(4, 'RB', 'June'),
		(5, 'Geno', 'June')";

		if($db->query($sqlinsert)){
			echo "added";
		}
		else{
			echo "something's wrong";
		}
		

		?>
	</div>


	<!------------------------- New Topic ------------>


<div id="ia" class="ordinary">
	<h1>MySQLi Retrieve</h1>
		<?php
		$sqlretrieve = "SELECT * FROM TC";
		$result = $db->query($sqlretrieve);

		while($row = $result->fetch_assoc()){
			echo "{$row['TCNAME']} was hired last {$row['TCBATCH']} <br />";
		}
		?>
	</div>


<?php
$db->close();
include("footer.html");
?>