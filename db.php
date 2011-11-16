<?php

// paypal buttons

$localhostButton = '<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="PTXDFBEKUN9LN">
    <input type="hidden" name="return" value="http://localhost:8888/survey-for-startup-idea/thankyou.php">
    <input type="hidden" name="rm" value="2">
    <input type="image" id="paypal-box" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>';

$productionButton = '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="E59AY99NG2QF8">
<input type="image" id="paypal-box" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>';

// Database Settings
if (strpos($_SERVER['SERVER_NAME'], 'cloudcontrolled.com') !== false) {
	$user = "depuc9g4bmj";
	$password = "pQveTyb8H3AgjM6";
	$host = "127.0.0.1";
	$database_name = "depuc9g4bmj";
	$paypal_button_html = $productionButton;
	
} else {
	$user = "root";
	$password = "password";
	$host = "localhost";
	$database_name = "clickbuypay";
	$paypal_button_html = $localhostButton;
}



