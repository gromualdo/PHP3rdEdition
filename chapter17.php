<?php
include("header.html");
?>
<div id="left">
	<strong><u>Dates and Times</u></strong><br /><br />
	<a href="#dt">DateTime</a><br />
	<a href="#dz">DateTimeZone</a><br />
	<a href="#di">DateTimeInterval</a><br />
	<a href="#dp">DatePeriod</a><br />

</div>
<div id="content">
	<div id="dt" class="ordinary">
		<h1>DateTime</h1>
			<?php
			
			// both not working
			// $tz = ini_get('date.timezone'); 
			// $dtz = new DateTimeZone($tz);

			$dtz = new DateTimeZone("America/Halifax");
			$dt = new DateTime("now" , $dtz);

			echo "date: " . $dt->format("Y-m-d h:i:s");

			?>
		<br /><a class="totop" href="#header">go to top</a>
	</div>


	<!------------------------- New Topic ------------>


	<div id="dz" class="ordinary">
		<h1>DateTimeZone</h1>
			<?php

			// $tz = ini_get('date.timezone');
			// $dtz = new DateTimeZone($tz);
			$dtz2 = new DateTimeZone("Asia/Manila");
			$dt2 = new DateTime("now", $dtz2);
			echo "date: " . $dt2->format("Y-m-d h:i:s");


			?>
		<br /><a class="totop" href="#header">go to top</a>
	</div>


	<!------------------------- New Topic ------------>


	<div id="di" class="ordinary problem">
		<h1>DateTimeInterval</h1>
			<?php

			//ayaw gumana
			$diff = $dt -> diff($dt2);
			echo "difference: " . $diff->format("%y years, %m months, %d days, %h hours, %i minutes");

			?>
		<br /><a class="totop" href="#header">go to top</a>
	</div>


	<!------------------------- New Topic ------------>


	<div id="dp" class="ordinary">
		<h1>DatePeriod</h1>
			<?php
			?>
		<br /><a class="totop" href="#header">go to top</a>
	</div>

<?php
include("footer.html");
?>
