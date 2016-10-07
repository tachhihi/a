<?php
$host = "localhost";

$username = "admin";

$password = "fakesmile";	

$dbname = "token";



$connection = mysql_connect($host,$username,$password);

if (!$connection)

  {

  die('Could not connect: ' . mysql_error());

  }

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");
function random_token() {
	$qr = mysql_query("SELECT access_token FROM token ORDER BY rand() LIMIT 1");
	$tk = mysql_fetch_row($qr);
	$token = trim($tk[0]);
	return $token;

}
?>