<?php
include("header.html");
?>
<div id="left">
	<strong><u>Chapter 4 <br />Strings</u></strong><br /><br />
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

<!-- New Topic  -->


<div class="ordinary" id="vi">
<h1>Variable Interpolation: Curly Brace</h1>
<?php
	$n = 12;
	echo "You are the {$n}th person";
	?>
<br /><a class="totop" href="#header">go to top</a></div>


	<!------------------------- New Topic ------------>


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
<br /><a class="totop" href="#header">go to top</a></div>


	<!------------------------- New Topic ------------>


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
<br /><a class="totop" href="#header">go to top</a></div>


	<!------------------------- New Topic ------------>


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
<br /><a class="totop" href="#header">go to top</a></div>


	<!------------------------- New Topic ------------>


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
<br /><a class="totop" href="#header">go to top</a></div>


	<!------------------------- New Topic ------------>


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
$new = strcmp("A", "2");
echo "<font class='problem'>$new </font><font color=green> //how?</font><br />";

//other variation (strcasecmp)
$x = strcmp("1", "9");
echo "<font class='problem'>$x </font><font color=green> //how?</font><br />";

//Approximate Equality
$geno="geno";
$jeno="jeno";

if (soundex($geno) == soundex($jeno)){
	echo "soundex: $geno sounds like $jeno <br />";
}
else{
	echo "it doesn't sound alike <br />";
}
if (metaphone($geno) == metaphone($jeno)){
	echo "metaphone: $geno sounds like $jeno <br />";
}
else{
	echo "it doesn't sound alike <br />";
}

//similar text
$string1 = "Geno Romualdo";
$string2 = "Geno Gelle Romualdo";
$common = similar_text($string1, $string2, $percent);
printf("They have %d chars in common (%.2f%%).<br />", $common, $percent);

//levenshtein
$levenshtein = levenshtein($string1, $string2);
echo $levenshtein;
?>
<br /><a class="totop" href="#header">go to top</a></div>


	<!------------------------- New Topic ------------>


<div id="mss" class="ordinary">
<h1>Manipulating and Searching Strings</h1>
<?php
//substrings
$cut = substr("caterpillar", 5, 11);
echo "$cut <br />";

//substring count
$longmsg = <<< End
mahabang caterpillar pillars the pillar of pillar in pillar pilapil;
End;
$count = substr_count($longmsg, $cut);
echo "$count <br />";

//substring replace
$newmsg = substr_replace($longmsg, "o", 15,1);
echo "$newmsg <br />";

//Miscellanous string functions
//strrev
$fruit = "guyabano";
$reversed = strrev($fruit);
echo "$reversed <br />";

//str_repeat
$repeated = str_repeat("$fruit ", 4);
echo "$repeated <br />";

//str_pad
$padded = str_pad("$fruit", 20, "yum ", STR_PAD_LEFT);
echo "$padded <br />";

//explode
$date = date("m-d-Y");
$exploded = explode("-", $date);
print_r($exploded);

//implode
$imploded = implode("-", $exploded);
echo "<br /> $imploded <br />";

//tokenizing
$tokenned = strtok($date, "-");
echo "$tokenned <br />";
$tokenned = strtok("-");
echo "$tokenned <br />";
$tokenned = strtok("-");
echo "$tokenned <br /><br />";

$tokenned = strtok($date, "-");
while ($tokenned !== false){
	echo("$tokenned <br />");
	$tokenned = strtok("-");
}


//sscanf() problem
$ulam = "kare-kare at bagoong";
$bago = sscanf($ulam, "%s'-'%s' '%s");
print_r($bago);
echo "<font color=green> //how?</font><br />";

//string-searching features
//strpos
$drink = "sprite+extra joss+GSM blue+mentos=Tipsy Bob";
$pos = strrpos($drink, "+"); 
echo "$pos<br />";

//strrpos
$pos = strrpos($drink, "+"); 
echo "$pos<br />";

//strstr
$pos = strstr($drink, "+"); 
echo "$pos<br />";

//strrchr
$pos = strrchr($drink, "+"); 
echo "$pos<br />";

//strspn
$numbers=93039328;
$pos = strspn($numbers,"01234567"); 
echo "$pos<font color=green> //how?</font><br />";

?>
<br /><a class="totop" href="#header">go to top</a></div>


	<!------------------------- New Topic ------------>


<div class="ordinary" id="re">
<h1>Regular Expressions</h1>
<?php

//basics
echo preg_match("/k/", "geno kim g\. romualdo"); //returns true
echo"<br />";
echo preg_match("/^k/", "geno kim g\. romualdo"); //returns false
echo"<br />";
echo preg_match("/do$/", "geno kim g\. romualdo"); //returns true
echo"<br />";
echo preg_match("/i$/", "geno kim g\. romualdo"); //returns false
echo"<br />";
echo preg_match("/k.m/", "geno kim g\. romualdo"); //returns true
echo"<br />";
echo preg_match("/km./", "geno kim g\. romualdo"); //returns false
echo"<br /><br />";


//character classes
echo preg_match("/k[aeiou]m/", "geno kim g\. romualdo"); //returns true
echo"<br />";
echo preg_match("/k[abcd]m/", "geno kim g\. romualdo"); //returns true
echo"<br />";
echo preg_match("/k[a-z]m/", "geno kim g\. romualdo"); //returns true
echo"<br />";
echo preg_match("/k[A_Z]m/", "geno kim g\. romualdo"); //returns true
echo"<br /><br />";

//alternatives
echo preg_match("/kim| kam/", "geno kim g\. romualdo"); //returns true
echo"<br />";
echo preg_match("/jon | lyn/", "geno kim g\. romualdo"); //returns true
echo"<br />";
?>
<br /><a class="totop" href="#header">go to top</a></div>



<?php
include("footer.html");
?>