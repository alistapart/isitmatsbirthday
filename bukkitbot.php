<?php

$foundone = 'null';

$file = 'http://bukk.it/' . $_GET["text"];
$file_headers = @get_headers($file);
if($file_headers[0] != 'HTTP/1.1 404 Not Found') {
   
	$foundone = $file;

};

$file = 'http://bukk.it/' . $_GET["text"] . '.jpg';
$file_headers = @get_headers($file);
if($file_headers[0] != 'HTTP/1.1 404 Not Found') {
   
	$foundone = $file;

};

$file = 'http://bukk.it/' . $_GET["text"] . '.jpeg';
$file_headers = @get_headers($file);
if($file_headers[0] != 'HTTP/1.1 404 Not Found') {
   
	$foundone = $file;

};

$file = 'http://bukk.it/' . $_GET["text"] . '.png';
$file_headers = @get_headers($file);
if($file_headers[0] != 'HTTP/1.1 404 Not Found') {
   
	$foundone = $file;

};

$file = 'http://bukk.it/' . $_GET["text"] . '.gif';
$file_headers = @get_headers($file);
if($file_headers[0] != 'HTTP/1.1 404 Not Found') {
   
	$foundone = $file;

};

if ($foundone == "null") {

	echo "BukkitBot looked for " . $_GET["text"] . " but couldn't find an image :(";

} else {

	$channel = $_GET["channel_name"];
	$username = $_GET["user_name"];

	$ch = curl_init();
	$curlConfig = array(
	    CURLOPT_URL            => "https://alistapart.slack.com/services/hooks/incoming-webhook?token=zgZtHd0u3l5KIbaHmpbIfIZH",
	    CURLOPT_POST           => true,
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_POSTFIELDS     => json_encode(array(
	       'text' => $foundone,
	       'username' => 'bukkit',
		   'channel_name' => $channel,
		   'username' => $username,
	    ))
	);

	curl_setopt_array($ch, $curlConfig);
	$result = curl_exec($ch);
	curl_close($ch);

}

?>