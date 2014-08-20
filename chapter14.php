<?php
include("header.html");
?>
<div id="left">
	<strong><u>Language Basics</u></strong><br />
	<a href="#st">GG</a><br />

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
