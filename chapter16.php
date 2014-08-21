<?php
include("header.html");
?>
<div id="left">
	<strong><u>Chapter 16 <br /> Debugging PHP</u></strong><br /><br />
	<a href="#md">Manual Debugging - echo</a><br />
	<a href="#md">Manual Debugging - var_dump</a><br />

</div>
<div id="content">
	<div id="ia" class="ordinary">
		<h1>Manual Debugging - echo</h1>
		<?php
			for($i = 0; $i <10; $i++){
				$debugger[] = $i;
				if($i ==1){
					print_r($debugger);
				}
			}
		?>
	</div>
	<div id="ia" class="ordinary">
		<h1>Manual Debugging - var_dump</h1>
		<?php
			$hmm = 50;
			var_dump($hmm);
			echo "<br /><br />";
			for($x="a"; $x<="h"; $x++){
				$bardumb[] = $x;
			}
			print_r("<pre>");
			var_dump($bardumb);
			print_r("</pre>");
			echo "<br /><br />";
			$ngek = "kay";
			var_dump($ngek);
		?>
	</div>



<?php
include("footer.html");
?>