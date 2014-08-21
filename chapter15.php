<?php
include("header.html");
?>
<div id="left">
	<strong><u>Chapter 15<br />Web Services</u></strong><br />
	<a href="#st">REST Responses</a><br />

</div>
<div id="content">
	<div id="ia" class="ordinary">
		<h1>REST Responses</h1>
		<h2>PHP Variable to JSON Representation</h2>
		<?php
			$data = array(1,2,3,"four", "payb");
			$jsonData = json_encode($data);
			echo $jsonData;

		?>
		<h2>JSON Representation to PHP Variable</h2>
		<?php
			$jsonData = "[1,2,3, [\"four\",\"payb\"], 6]";
			$data = json_decode($jsonData);
			print_r($data);
		?>
	</div>





<?php
include("footer.html");
?>