<?php



















define('GRAVITY', 9.8);

$header = <<< EOD
<html>
<head>
<title> Sample PHP Form Example </title>
</head>
<body>
EOD;

$footer = <<< EOD
</body>
</html>
EOD;

$form_layout = <<< EOD
<p>
<form method ="post" action="">
<label name="truncateFloat">Floating Point Value</label><input type ="text" name="truncateFloat"><br>
<label name="fahrenheit2Kelvin">Fahrenheit Value</label><input type="text" name="fahrenheit2Kelvin"><br>
<label name="impactVelocity">Height of Fall Value</label><input type="text" name="impactVelocity"><br>
<label name="dodecahedronVolume">Side Length Value</label><input type="text" name="dodecahedronVolume"><br>
<input type="submit" value="submit" name="submit">
</form>
</p>
EOD;

function truncateFloat($float_value)
{
	return (int) floatval($float_value * 100) / 100;
}

function fahrenheit2Kelvin($degrees_f)
{
	return ($degrees_f - 32) * 5 / 9 + 273.15;
}

function dodecahedronVolume($area)
{
	return pow($area, 3) / 4 * (15 + 7 * sqrt(5));
}

function impactVelocity($height)
{
	return sqrt(2 * GRAVITY * $height);
}

if(isset($_POST['submit'])) {
	$truncateFloatResult = truncateFloat($_POST["truncateFloat"]);
	$fahrenheit2KelvinResult = fahrenheit2Kelvin($_POST["fahrenheit2Kelvin"]);
	$dodecahedronVolumeResult = dodecahedronVolume($_POST["dodecahedronVolume"]);
	$impactVelocityResult = impactVelocity($_POST["impactVelocity"]);
} else {
	$truncateFloatResult = "";
	$fahrenheit2KelvinResult = "";
	$dodecahedronVolumeResult = "";
	$impactVelocityResult = "";
}


if(!isset($_POST['submit'])) {
	echo $form_layout;
} else {
	$form_results = $header;
	if (!empty($truncateFloatResult)) {
		$form_results .= "The truncated floating point value is: " . $truncateFloatResult . ". <br>";
	}
	if (!empty($fahrenheit2KelvinResult)) {
		$form_results .= "The Kelvin value is: " . $fahrenheit2KelvinResult . ". <br>";
	}	
	if (!empty($dodecahedronVolumeResult)) {
		$form_results .= "The Dodecahedron volume is: " . $dodecahedronVolumeResult . ". <br>";
	}
	if (!empty($impactVelocityResult)) {
		$form_results .= "The impact velocity is: " . $impactVelocityResult . ". <br>";
	}
	//do for the rest of the values


$form_results .= $footer;

echo $form_results;
}
?>