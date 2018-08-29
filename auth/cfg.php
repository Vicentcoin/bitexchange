<?php
class object {}
$CFG = new object();
if ($_SERVER['SERVER_NAME'] == 'localhost') {
	$CFG->dbhost = "localhost";
	$CFG->dbname = "bitexchange";
	$CFG->dbuser = "root";
	$CFG->dbpass = "root";
} else {
	$CFG->dbhost = "localhost";
$CFG->dbname = "bitexchange";
$CFG->dbuser = "root";
$CFG->dbpass = "root";
}


$CFG->email_smtp_host="mail.santafe.gov.ar";
$CFG->email_smtp_port="25";
$CFG->email_smtp_send_from="pbussi@santafe.gov.ar";

?>
