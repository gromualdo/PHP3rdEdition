<?php
	header("Content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding='ISO-8859-1' ?>";
	$pasko = array("mataba" => "SantaKlaws", "maysipon" =>"Rendir", "eskimo"=>"Snoman", "toothdecay"=>"KendiKeyn");
	$flipped = array_flip($pasko);
	$x =0;
?>
<library>
	<title>
		<title>PHP</title>
			<authors>
				<authors>Mr. Donut</authors>
					<pleybors>
						<pleybors>Barbarian</pleybors>
						<pleybors>Stroberi</pleybors>
						<pleybors>Pinyapol</pleybors>
						<pleybors>Heselnat</pleybors>
						<pleybors>Pawderd</pleybors>
					</pleybors>
				<authors>Feliz Na Vidad</authors>
					<remembrans>
						<?PHP
							foreach($pasko as $pinoyv => $remembrans){
								$x++;
								echo "<{$pinoyv}> $remembrans </{$pinoyv}>";
							}
								foreach($flipped as $pinoyv => $remembrans){
								$x++;
								echo "<{$pinoyv}> $remembrans </{$pinoyv}>";
							}
						?>
					</remembrans>
				<authors>Red Black Tree</authors>
				<authors>Run Faster</authors>
			</authors>
		<title>Perl</title>
	<title>C#</title>
	</title>
</library>