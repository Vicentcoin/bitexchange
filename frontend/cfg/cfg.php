<?php
class object {}
$CFG = new object();
if ($_SERVER['SERVER_NAME'] == 'localhost') {
	$base_url = "http://localhost/bitexchange/";
	$CFG->api_url = $base_url.'api/htdocs/api.php';
	$CFG->auth_login_url = $base_url.'auth/htdocs/login.php';
	$CFG->auth_verify_token_url = $base_url.'auth/htdocs/verify_token.php';
} else {
	$base_url = "http://tradlr.com/bitexchange//";
$CFG->api_url = 'http://tradlr.com/bitexchange//api/htdocs/api.php';
$CFG->auth_login_url = 'http://tradlr.com/bitexchange/auth/htdocs/login.php';
$CFG->auth_verify_token_url = 'http://tradlr.com/bitexchange/auth/htdocs/verify_token.php';
}


$CFG->google_recaptch_api_key="6LeDOG0UAAAAAKMJsFJ68ZoghgvTQHV-jOaBa55E";
$CFG->google_recaptch_api_secret="6LeDOG0UAAAAAC3C8n1Cp2oaUAUpXmkmJQubQt33";
$CFG->currencies['USD']="US DOLLARS";
$CFG->default_timezone='Europe/Paris';
$CFG->decimal_separator=".";
$CFG->thousands_separator=",";
$CFG->exchange_name="mi exchange";
$CFG->language="EN";
$CFG->lang_table["EN"]['home-register']="Register";
$CFG->pass_regex="/[^0-9]/";
?>
