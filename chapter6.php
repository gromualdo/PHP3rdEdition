<?php
include("header.html");
?>
<div id="left">
	<strong><u>Chapter 6 <br />Objects</u></strong><br /><br />
	<a href="#mt">Methods</a><br />
	<a href="#mt">Introspection</a><br />

</div>
<div id="content">
	<div id="mt" class="ordinary">
		<h1>Methods</h1>
		<?php

			class Person
			{
				public $name = 'unset';
				public $age;

				public function __construct()
				{
					$this->age = 10;
				}
				function getName()
				{
					return $this->name;
				}
				function setName($newName)
				{
					$this->name = $newName;
				}
				protected function decrementAge()
				{
					$this->age -= 1;
					$this->ageChanged();
				}
				private function ageChanged()
				{
					echo "Age changed to {$this->age}";
				}
			}

			class bakitganire extends Person
			{
				public function incrementAge()
				{
					$this->decrementAge();
				}
			}

			$geno = new Person();
			$geno->getName();
			echo $geno->name . "<br />";
			$geno->setName("Geno Kim");
			echo $geno->name . "<br />";
			
			// followed the code in the book, not working
			// $geno->decrementAge();
			// $geno = new bakitganire();
			// $geno->incrementAge();
		?>
	</div>


<!----------------------- New Topic ------------------------------------>


	<div id="mt" class="ordinary">
		<h1>Destructor</h1>
		<?php
			//Destructor
			class Building
			{
				function __destruct()
				{
				echo "A Building is being destroyed!";
				}
			}
		?>
	</div>


<!----------------------- New Topic ------------------------------------>


	<div id="mt" class="ordinary">
		<h1>Introspection</h1>
		<?php
			//introspection
			function displayClasses()
			{
				$classes = get_declared_classes();
				
				foreach($classes as $class){
					echo "<strong>Info on class: {$class}</strong> <br />";
					echo "<strong>Class methods: <br /></strong>";
					$methods = get_class_methods($class);

					if(!count($methods)){
						echo "No classes to display <br />";
					}
					else{
						echo "<ul>";
						foreach($methods as $method){
							echo "<li>{$method}</li>";
						}
						echo "</ul>";
					}
					echo "<strong>Class properties:</strong> <br />";
					$properties = get_class_vars($class);

					if(!count($properties)){
						echo "No properties to display <br />";
					}
					else{
						echo "<ul>";
						foreach($properties as $property){
							echo "<li>{$property}</li>";
						}
						echo "</ul>";
					}
				}
			}
			displayClasses();
		?>
	</div>


<?php
include("footer.html");
?>