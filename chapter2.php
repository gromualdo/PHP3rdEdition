<?php
include("header.html");
?>
<div id="left">
	<strong><u>Chapter 2 <br />Language Basics</u></strong><br /><br />
	<a href="#st">Strings</a><br />
	<a href="#ar">Arrays</a><br />
	<a href="#ob">Objects</a><br />
	<a href="#cb">Callbacks</a><br />
	<a href="#vv">Variable Variables</a><br />
	<a href="#vr">Variable References</a><br />
	<a href="#vs">Variable Scope</a><br />
</div>
<div id="content">
	<div id="st" class="ordinary">
		<h1>Strings</h1>
		<?php
			$name = "Geno";
			echo "Hi, $name<br />";
			echo 'Hi, $name';
			echo "<br />";
			$dosPath = 'C:\\WINDOWS\\SYSTEM';
			$publisher = 'Tim O\'Reilly';
			echo "$dosPath $publisher<br />";
		?>
	 	<br /><a class="totop" href="#header">go to top</a>
	 </div>

<!----------------------- New Topic ------------------------------------>

	<div id="ar" class="ordinary">
		<h1>Arrays</h1>
		<?php
			//Normal Array
			$names[0] ="Geno";
			$names[1] ="Kim";
			$names[2] ="Gelle";
			$names[3] ="Romualdo";
			print_r($names);
			echo "<br /><br />";

			//associative Array
			$artists["Dig"] ="Incubus";
			$artists["Rockstar"] ="Nickelback";
			$artists["Redemption Song"] ="Bob Marley";
			foreach($artists as $song => $artist){
				echo "$artist: $song <br />"; 
			}
			
		?>
	 	<br /><a class="totop" href="#header">go to top</a>
	 </div>

<!----------------------- New Topic ------------------------------------>

	<div id="ob" class="ordinary">
		<h1>Objects</h1>
		<?php
		class Person{
			public $name = "";
			function name($newname=NULL){
				if(!is_null($newname)){
					$this->name = $newname;
				}
				return $this->name;
			}
		}

		$ge = new Person;
		$ge->name('Geno');
		echo "Watashi wa {$ge->name} des <br />";
		$kim = new Person;
		$kim->name("Kim");
		echo "Watashi mo {$kim->name} des <br />";
		?>
		<br /><a class="totop" href="#header">go to top</a>
	 </div>

<!----------------------- New Topic ------------------------------------>


	<div id="cb" class="ordinary">
		<h1 class="problem">Callbacks</h1>
		<?php
			//$kolbak = function bagongfunction(){
			//	echo "Gutom na kow!";
			//}
			//call_user_func($kolbak);
		?>
		<br /><a class="totop" href="#header">go to top</a>
	 </div>

<!----------------------- New Topic ------------------------------------>


	<div id="vv" class="ordinary">
		<h1>Variable Variables</h1>
		<?php
			$foo = "bar";
			$$foo = "baz";
			echo $bar;
		?>
		<br /><a class="totop" href="#header">go to top</a>
	 </div>

<!----------------------- New Topic ------------------------------------>

	<div id="vr" class="ordinary">
		<h1>Variable References</h1>
		<?php
			$realvariable = "Real na";
			$geno =& $realvariable;
			$realvariable .=" real<br />";
			echo $geno;

			function &retRef(){
				$var ="PHP";
				return $var;
			}
			$var =& retRef();
			echo $var;
		?>
		<br /><a class="totop" href="#header">go to top</a>
	 </div>

<!----------------------- New Topic ------------------------------------>

	<div id="vs" class="ordinary">
		<h1>Variable Scope </h1>
		<?php
			function updateCounter(){
				static $counter=0;
				$counter++;
				echo "Static: $counter";
			}

			$counter = 10;
			updateCounter();
			updateCounter();

		?>
		<br /><a class="totop" href="#header">go to top</a>
	 </div>

<!----------------------- New Topic ------------------------------------>


<?php
include("footer.html");
?>