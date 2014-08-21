<?php
include("header.html");
?>
<div id="left">
	<strong><u>Chapter 14<br />PHP on Disparate Platforms</u></strong><br /><br />
	<a href="#st">PHP_SELF</a><br />

</div>
<div id="content">

<?php
foreach($_SERVER as $key => $function){
	echo "$key : $function <br />";
}
?>


<?php
include("footer.html");
?>
