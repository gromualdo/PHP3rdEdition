

<?php
include("header.html");
?>
<div id="left">
	<strong><u>Chapter 13 <br />Application Techniques</u></strong><br /><br />
	<a href="#st">Templating</a><br />
	<a href="#st">Error Handling</a><br />

</div>
<div id="content">
	<div id="ia" class="ordinary">
		<h1>Cross-Site Scripting</h1>
		<a href="templeting/user.template" title="Di ko mapagana">Go to sample</a>
	</div>

<!----------------------- New Topic ------------------------------------>

	<div id="ia" class="ordinary">
		<h1>Error handling</h1>
		<?php
		function displayError($error, $errorString, $filename, $line, $symbols)
		{
			echo "may error dito pero pinalampas ko na lang, mabait akong browser";
		}
		set_error_handler('displayError');
		$value = 4 / 0; // divide by zero error
		?>
	</div>

<?php
include("footer.html");
?>