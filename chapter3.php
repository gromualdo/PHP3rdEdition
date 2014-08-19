<?php
include("header.html");
?>
<div id="left">
	<strong><u>Chapter 3 <br />Functions</u></strong><br /><br />
	<a href="#df">Defining a Function</a><br />
	<a href="#fp">Function Parameters</a><br />
	<a href="#rv">Return Values</a><br />
	<a href="#af">Anonymous Functions</a><br />

</div>
<div id="content">
	<div id="df" class="ordinary">
		<h1>Defining a Function</h1>
			<?php
				function strconcat($first, $second){
					return $first. $second;
				}
				$one = "Watashi wa ";
				$two = "Geno des";
				echo strconcat($one, $two);
			?>
	 	<br /><a class="totop" href="#header">go to top</a>
	 </div>	

	<!------------------------- New Topic ------------>

	<div id="fp" class="ordinary">
		<h1>Function Parameters</h1>
		<h2>Passing Parameters by Values</h2>
			<?php
				function sqrd($value)
				{
					$value = $value*$value;
					return $value;
				}
				$num = 16;
				sqrd($num);
				$ans = sqrd($num);
				echo "$ans<br />";
			?>
		<h2>Passing Parameters by Values</h2>
			<?php
				function sqrd2(&$value2)
				{
					$value2 = $value2*$value2;
				}
				$num2=11;
				sqrd2($num2);
				echo "$num2";
			?>
	 	<br /><a class="totop" href="#header">go to top</a>
	 </div>

	 <!------------------------- New Topic ------------>

	<div id="rv" class="ordinary">
		<h1>Return Values</h1>
		<h2>Returning multiple values (via array)</h2>
		<?php
		$names = array("Fred", "Barney", "Wilma", "Betty");
		function &findOne($n) {
			global $names;
			return $names[$n];
		}

		foreach ($names as $name)
			echo "$name <br />";
		
		echo "<br />";
		$person = findOne(1);
		$person = "Barnetta";

		$girl =& findOne(3);
		$girl = "<3";
		foreach ($names as $name)
			echo "$name <br />";
		unset($girl);

		foreach ($names as $name)
			echo "$name <br />";
		?>
		<br /><a class="totop" href="#header">go to top</a>
	 </div>

	 <!------------------------- New Topic ------------>

	<div id="af" class="ordinary">
		<h1>Anonymous Functions</h1>
		<?php
		$array = array("really long string here, boy", "this", "middling length", "larger");
		$sortOption = 'random';
		usort($array, function($a, $b) use ($sortOption)
		{
		if ($sortOption == 'random') {
		// sort randomly by returning (−1, 0, 1) at random
		return rand(0, 2) - 1;
		}
		else {
		return strlen($a) - strlen($b);
		}
		});
		print_r($array);		
		?>
		<br /><a class="totop" href="#header">go to top</a>
	 </div>


<?php
include("footer.html");
?>
