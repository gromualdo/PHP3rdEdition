<?php
include("header.html");
?>
<div id="left">
	<strong><u>Chapter 5 <br />Arrays</u></strong><br /><br />
	<a href="#">Index versus Associative Arrays</a><br />
	<a href="#sd">Storing Data in Arrays</a><br />
	<a href="#ma">Multidimensional Array</a><br />
	<a href="#ex">Extracting Multiple Values</a><br />
	<a href="#cb">Converting Between Arrays and Variables</a><br />
	<a href="#ta">Traversing Arrays</a><br />
</div>
<div id="content">
	<div id="ia" class="ordinary">
		<h1>Indexed Versus Associative Arrays</h1>
		<?php
			$wedinga = Array("Geno"=>"First Base", "Geno"=>"Second Base", "Geno"=>"Third Base");
			print_r($wedinga);
			echo "<br />";
			$ayoonga = Array("Geno1"=>"First Base", "Geno2"=>"Second Base", "Geno3"=>"Third Base");
			print_r($ayoonga);

		?>
		 <br /><a class="totop" href="#header">go to top</a>
	 </div>


	 <!------------------------- New Topic ------------>

	<div id="sd" class="ordinary">
		<h1>Storing Data in Arrays</h1>
		<?php
		$addresses[0]= "spam@cyberpromo.com";
		print_r($addresses);
		echo "<br />";

		//auto assign keys
		$days = array(1 => "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
		print_r($days);
		echo "<br />";

		//adding values to array
		$person = array('name' => "Fred");
		$person[] = "Wilma";
		print_r($person);
		echo "<br />";

		//assigning a range of values
		$numbers = range(1, 5);
		print_r($numbers);
		echo "<br />";

		//getting the size of an array
		$confusion = array( 10 => "ten", 11 => "eleven", 12 => "twelve");
		$size = count($confusion);
		echo $size;
		echo "<br />";

		//padding array
		$scores = array(5, 10, 9);
		$padded = array_pad($scores,5, 1);
		print_r($padded);
		echo "<br />";

		



		?>
		 <br /><a class="totop" href="#header">go to top</a>
	 </div>

	 <!------------------------- New Topic ------------>

	<div id="ma" class="ordinary">
		<h1>Multidimensional Array</h1>
		<?php
		//Multidimensional Arrays
		$row0 = array(1, 2, 3);
		$row1 = array(4, 5, 6);
		$row2 = array(7, 8, 9);
		$multi = array($row0, $row1, $row2);
		echo("The value at row 1, column 2 is {$multi[1][2]}<br />");
		?>
		 <br /><a class="totop" href="#header">go to top</a>
	 </div>

	 <!------------------------- New Topic ------------>

	<div id="ex" class="ordinary">
		<h1>Extracting Multiple Values</h1>
		<?php
		$person = array("Geno", 22, "Jona");
		list($name, $age, $wife) = $person;
		echo "$name, $age, $wife";
		echo "<br />";

		//slicing an array
		$people = array("Tom", "Dick", "Harriet", "Brenda", "Jo");
		$middle = array_slice($people, 2, 2);
		print_r($middle);
		echo "<br />";

		//checking whether an element exists
		$person['age'] = 0; // unborn?
		if ($person['age']) {
			echo "true!<br />";						//will not display since the value of $person['age'] is 0
		}
		if (array_key_exists('age', $person)) {
			echo "exists!<br />";					//will display, PHP found a key and value $person['age']
		}

		?>
		 <br /><a class="totop" href="#header">go to top</a>
	 </div>

	 <!------------------------- New Topic ------------>

	<div id="cb" class="ordinary">
		<h1>Converting Between Arrays and Variables</h1>
		<?php
			//array to variable
			$arr = array("shape"=> "bilog", "length"=> "mahaba", "color"=> "pula");
			extract($arr);
			echo "shape is $shape, length is $length, color is $color<br />";

			//variable to array
			$a = compact("shape", "length", "color");
			print_r($a);
		?>
		 <br /><a class="totop" href="#header">go to top</a>
	 </div>

	 <!------------------------- New Topic ------------>

	<div id="ta" class="ordinary">
		<h1>Traversing Arrays</h1>
		<?php
			//the foreach construct
			$addresses = array("gn.rmld@gmail.com", "gromualdo@klab.com", "gn_rmld@yahoo.com");
			foreach ($addresses as $address){
			echo "email address: $address <br />";
			}
			echo "<br />";

			//iterator functions
			reset($a);
			while(list($key, $value)= each($a)){
				echo "$key is $value <br />";
			}
			echo "<br />";


			//using for loop
			//can't be used on associative arrays
			$addressescount = count($addresses);
			for ($i = 0; $i < $addressescount; $i++){
				$value = $addresses[$i];
				echo "$value <br />";
			}

			//calling a function  for each array element
			function printRow($value, $key, $color)
			{
			echo "<tr>\n<td bgcolor=\"{$color}\">{$value}</td>";
			echo "<td bgcolor=\"{$color}\">{$key}</td>\n</tr>\n";
			}
			$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
			echo "<table border=\"1\">";
			array_walk($person, "printRow", "green");
			echo "</table>";

		?>
		 <br /><a class="totop" href="#header">go to top</a>
	 </div>

<?php
include("footer.html");
?>