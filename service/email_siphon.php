<?php 
error_reporting(-1);
session_start();
$username="strobefl";
$password="st0lenbarr0w";
$database="strobefl_labs";

mysql_connect('localhost',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$email = $_GET["addy"];
$email = mysql_real_escape_string($email);

mysql_query("INSERT INTO `goboldly_addresses` (addy) VALUES ('$email')")
?>