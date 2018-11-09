<?php

/* our display functions for outputting information*/


function hcf_contact_info($content) {

	global $hcf_options;

$output = <<<EOD
<h1 align="center">Let's get in touch</h1>
<p align="center">Want to work together or simply want to have a chat? Drop me an email at the email address below.</p>
<p align="center"><img src="https://cdn1.iconfinder.com/data/icons/neon-line-social-circles-black/100/Neon_Line_Social_Circles_50Icon_10px_grid-52-512.png" style="width:35px;height:35px;">
<a>julietteandrea1@gmail.com</a><br>

<a href="https://www.linkedin.com/in/juliettegil-" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/linkedin_circle_black-512.png" style="width:35px;height:35px;"></a>

<a href="https://www.github.com/julietteandrea" target="_blank"><img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/github-512.png" style="width:32px;height:32px;"></a>
</p>

EOD;
 /*echo $hcf_options['email_address'];
 echo $hcf_options['linkedin_url'];*/
$content .= $output;

echo $content;
	
}
add_action( 'get_footer', 'hcf_contact_info' );

/*
' . $hcf_options['linkedin_url'] . '
' . $hcf_options['https://www.github.com/julietteandrea'] . '
*/