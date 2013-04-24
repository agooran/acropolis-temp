<?php 
error_reporting(-1);
session_start();
$username="strobefl_tlabs";
$password="st0lenbarr0w";
$database="strobefl_labs";

mysql_connect('localhost',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$email = $_GET["email"];
$email = mysql_real_escape_string($email);

mysql_query("INSERT INTO `goboldly-emails` (email) VALUES ('$email')")
?>