<?php

/**
 * Lab 6, Static Classes
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author YOUR_NAME <YOUR_EMAIL_ADDRESS@vtc.edu>
 * @since 20150303
 */

/**
 * Outputs to the console a truncated float.
 *
 * Takes in a floating point number and truncates in to two places of precision.
 * Then returns to the output to the console.
 *
 * @param $float_value
 */

namespace VTC\Lab_5\PageLayout;

class PageLayout
{
	public static function formResults($truncateFloat, $fahrenheit2Kelvin, $dodecahedronVolume, $impactVelocity){
		
		$form_results = "";
    if (!empty($truncateFloatResult)) {
        $form_results .= "The truncated floating point value is: " . $truncateFloatResult . ".<br>";
    }
    if (!empty($fahrenheit2KelvinResult)) {
        $form_results .= "The Kelvin value is: " . $fahrenheit2KelvinResult . ".<br>";
    }
    if (!empty($dodecahedronVolumeResult)) {
        $form_results .= "The dodecahedron volume value is: " . $dodecahedronVolumeResult . ".<br>";
    }
    if (!empty($impactVelocityResult)) {
        $form_results .= "The splat value is: " . $impactVelocityResult . ".<br>";
    }
	
	echo $form_results;
	}

    public static $header = "<html>\n\t<head>\n\t\t<title>Simple PHP Form Example</title>\n\t</head>\n\t<body>";
    public static $footer = "\n\t</body>\n</html>";
    public static $form_layout = <<< EOD
<p>
<form method="post" action="">
    <label name="truncateFloat">Floating Point Value</label><input type="text" name="truncateFloat"><br>
    <label name="farenheit2Kelvin">Fahrenheit Value</label><input type="text" name="farenheit2Kelvin"><br>
    <label name="dodecahedronVolume">Dodecahedron Side Value</label><input type="text" name="dodecahedronVolume"><br>
    <label name="impactVelocity">Height of Fall Value</label><input type="text" name="impactVelocity"><br>
    <input type="submit" value="submit" name="submit">
</form>
</p>
EOD;

}
