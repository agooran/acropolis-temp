<?php
define("ZDAPIKEY", "9m4xg7JDAsyQbEoF8SBjearozQcduyvTXieC3hQt");
define("ZDUSER", "agooran@gmail.com");
define("ZDURL", "https://goboldly.zendesk.com");

function curlWrap($url, $json)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false );
	curl_setopt($ch, CURLOPT_MAXREDIRS, 10 );
	curl_setopt($ch, CURLOPT_URL, ZDURL.$url);
	curl_setopt($ch, CURLOPT_USERPWD, ZDUSER."/token:".ZDAPIKEY);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
	curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	$output = curl_exec($ch);
	curl_close($ch);
	$decoded = json_decode($output);
	return $decoded;
}

foreach($_POST as $key => $value){
	if(preg_match('/^z_/i',$key)){
		$arr[strip_tags($key)] = strip_tags($value);
	}
}
$create = json_encode(array('ticket' => array('subject' => $arr['z_subject'], 'description' => $arr['z_description'], 'requester' => array('name' => $arr['z_name'], 'email' => $arr['z_requester']))), JSON_FORCE_OBJECT);
$return = curlWrap("/tickets.json", $create);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta http-equiv="refresh" content="1;url=http://www.organizer.com">-->
<title>Go Boldly</title>
 
</head>
 
<body>
Thanks! Your Message HasSent!
</body>
</html>