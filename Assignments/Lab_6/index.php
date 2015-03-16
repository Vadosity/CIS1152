<?php

require_once "src/PageLayout.php";
require_once "src/math_fun.php";

use VTC\Lab_5\MathFun as MathFun;
use VTC\Lab_5\PageLayout as PageLayout;


$math = new MathFun\MathFun;

if (isset($_POST['submit'])) {
    $truncateFloatResult = $math -> truncateFloat($_POST["truncateFloat"]);
    $farenheit2KelvinResult = $math -> fahrenheit2Kelvin($_POST["fahrenheit2Kelvin"]);
    $dodecahedronVolumeResult = $math -> dodecahedronVolume($_POST["dodecahedronVolume"]);
    $impactVelocityResult = $math -> impactVelocity($_POST["impactVelocity"]);
} else {
    $truncateFloat = "";
    $fahrenheit2Kelvin = "";
    $dodecahedronVolume = "";
    $impactVelocity = "";
}

echo PageLayout\PageLayout::$header;

if (!isset($_POST['submit'])) {

    echo PageLayout\PageLayout::$form_results;
} else{
	PageLayout\PageLayout::formResults($truncateFloatResult, $fahrenheit2KelvinResult, $dodecahedronVolumeResult, $impactVelocityResult);
	echo PageLayout\PageLayout::$form_results;
}

echo PageLayout\PageLayout::$footer;
?>