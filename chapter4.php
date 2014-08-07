<?php
include("header.html");
?>
<div id="left">
<a href="#vi">Variable Interpolation</a><br />
<a href="#hd">Here Documents</a><br />
<a href="#ps">Printing Strings</a><br />
<a href="#aic">Access Individual Characters</a><br />
<a href="#ee">Encoding and Escaping</a><br />
<a href="#cs">Comparing Strings</a><br />
<a href="#mss">Manipulating and Searching Strings</a><br />
<a href="#re">Regular Expressions</a><br />
</div>
<div id="content">

<div class="ordinary" id="vi">
<h1>Variable Interpolation: Curly Brace</h1>
<?php
	$n = 12;
	echo "You are the {$n}th person";
	?>
</div>

<div class="ordinary" id="hd">
<h1>HereDoc</h1>
<?php
//simple heredoc declaration
$FirstHereDoc = <<< UU
Ang inidoro ay basa
kaya hindi ako umuu
dahil ako'y nadidiri.
UU;
echo $FirstHereDoc;
echo "<br /><br />";

//heredoc in more complex expression
printf(<<< Template
%s is %d years old.
Template
, "Ted", 12);
echo "<br /><br />";

//using heredoc with single quotes and double quotes passed through
$dialogue = <<< Arnold
"I am robocop"
No you're not, you're the "Terminator"
Arnold;
echo $dialogue;
echo "<br /><br />";

//explore version
$baryabol = "Non sense variable";
$withbaryabol = <<< gagana
$baryabol
gagana;
echo $withbaryabol;
?>
</div>

<div id="ps" class="ordinary">
<h1> Printing Strings </h1>
<?php
//simple echo
echo "Echo1<br />";
echo ("Echo2<br />");
echo "Echo3 ", "Echo4 ", "Echo5.";
echo "<br /><br />";

//print
if(print("working ")){
	print("yes it is working");
}
else{
	print("something else");
}
echo "<br /><br />";
//printf
printf('%2.f <br />', 3.1416); 										//floating-point number with two decimal places
printf('The hex value of %d is %x <br />', 200, 200); 				//decimal and hexadecimal output
printf('Bond, James Bond. %03d <br />', 7);							//padding an integer to three decimal places
printf('%02d/%02d/%04d <br />', date('m'), date('d'), date('Y')); 	//formatting a date
printf('%.2f%% Complete <br />', 2.3);	 							//percentage
printf('You\'ve spent $%5.2f so far <br />', 5.5); 					//padding a floating point number
echo "<br /><br />";

//print_r
//printing an object
$AssocArr = Array("Linkin Park"=>"Somewhere I belong", "Nickelback" => "Rockstar", "Matchbox 20" => "Unwell");
print_r($AssocArr); 						

//printing an object
class Obj {
	var $name = "geno";
	var $age = 22;
	function ows(){
		$exp = "wow";
	}
}
$obj = new Obj;
print_r($obj);

?>
</div>


<div id="aic" class="ordinary">
<h1>Accessing Individual Characters</h1>
<br />
<?php
$string = 'Aloha';
$length = strlen($string);

for ($i=0; $i < $length; $i++) {
	printf("The %dth character is %s <br />", $i, $string{$i});
}
?>
</div>


<div id="ee" class="ordinary">
<h1>Encoding and Escaping(URLs, SQL, C-String)</h1>
<h2 class="problem">HTML</h2>
<?php
//entity-quoting all special characters
$input = <<< End
"Stop pulling my hair!" Jane's eyes flashed.<p>
End;
$double = htmlentities($input);
echo "$double <br />";

//with quote_style parameter
$both = htmlentities($input, ENT_QUOTES);
$neither = htmlentities($input, ENT_NOQUOTES);
echo "$both <br /><br />";
echo $neither;

//URL
echo "<br />";
echo "<h2>URL</h2>";
$name = "Programming PHP";
$output = rawurlencode($name);
echo "http://localhost/{$output}";

//C-String
echo "<br />";
echo "<h2>C-String</h2>";
echo stripcslashes("hell\ow\orld");
?>
</div>

<div id="cs" class="ordinary">
<h1>Comparing Strings</h1>

<?php
// === and == operators
$o1 = 3;
$o2 = "3";
if ($o1 == $o2) {
    echo("== returns true<br>");
}
if ($o1 === $o2) {
    echo("=== returns true<br>");
}

//string comparison
if ("a" < "A"){
	echo "a is first";
}
else if("a" < "A"){
	echo "its the same";
}
else if("a" > "A"){
	echo "small letter is greater?<br />";	
}

//explicit string comparison (strcmp)
$n = strcmp(1, "A");
echo "<font class='problem'>$n </font><font color=green> //how?</font><br />";

//other variation (strcasecmp)
$x = strcmp("Batman", "batmAn");
echo "<font class='problem'>$x </font><font color=green> //how?</font><br />";

?>
</div>

</div>
<?php
include("footer.html");
?>
